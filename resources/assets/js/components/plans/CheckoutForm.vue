<template>

</template>

<script>
    export default {
        props: ['plan'],

        data() {
            return {
                stripeKey: window.stripeKey,
                formData: {
                    stripeEmail: '',
                    stripeToken: '',
                    plan: ''
                }
            };
        },

        created() {

            this.stripe = StripeCheckout.configure({
                key: this.stripeKey,
                image: "https://stripe.com/img/documentation/checkout/marketplace.png",
                locale: "auto",
                token: token => {
                    this.formData.stripeToken = token.id;
                    this.formData.stripeEmail = token.email;

                    window.axios.post('/subscribe', this.$data.formData)
                        .then(response => window.location.href = window.url + "/dashboard" );
                }
            });
        },

        watch: {
            plan: function(newPlan) {
                this.formData.plan = newPlan.name;
                this.buy();
            }
        },

        methods: {
            buy() {
                this.stripe.open({
                    name: this.plan.name,
                    description: this.plan.description,
                    zipCode: true,
                    amount: this.plan.price
                });
            }
        }
    }
</script>
