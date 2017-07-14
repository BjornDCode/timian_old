<template>
    <div>
        <div class="plans">
            <plan v-for="plan in plans" :plan="plan" key="plan.id" v-on:selectPlan="setSelectedPlan"></plan>
        </div>
        <checkout-form :plan="selectedPlanObject"></checkout-form>
    </div>
</template>

<script>
    export default {
        props: ['plans'],

        data() {
            return {
                selectedPlanId: 1,
                selectedPlanObject: {}
            }
        },

        methods: {
            setSelectedPlan(id) {
                this.selectedPlanId = id;
                this.activateCheckout();
            },
            activateCheckout() {
                this.selectedPlanObject = this.findPlanById(this.selectedPlanId);
            },
            findPlanById(id) {
                return this.plans.find(plan => plan.id == id);
            }
        }
    }
</script>
