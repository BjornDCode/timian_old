<template>
    <div class="plan">
        <div class="plan-header">
            <h2>{{ this.plan.name }}</h2>
            <h3>{{ this.plan.price / 100 }},-</h3>
        </div>
        <ul class="benefits">
            <li v-for="benefit in plan.benefits">{{ benefit.value }}</li>
        </ul>
        <button type="button" class="btn btn-primary" v-on:click="selectProduct">Select Plan</button>
    </div>
</template>

<script>
    export default {
        props: ['plan'],

        methods: {
            selectProduct() {
                this.$emit('selectPlan', this.plan.id);
            }
        }
    }
</script>
