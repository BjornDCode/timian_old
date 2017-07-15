<template>
    <div class="plans-container">
        <div class="plans">
            <plan v-for="plan in plans" :plan="plan" key="plan.id" v-on:selectPlan="setSelectedPlan"></plan>
        </div>
        <checkout-form :plan="selectedPlanObject" v-on:isLoading="setLoadingState"></checkout-form>
        <loader v-show="isLoading"></loader>
    </div>
</template>

<script>
    export default {
        props: ['plans'],

        data() {
            return {
                selectedPlanId: 1,
                selectedPlanObject: {},
                isLoading: false
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
            },
            setLoadingState(state) {
                this.isLoading = state;
            }
        }
    }
</script>
