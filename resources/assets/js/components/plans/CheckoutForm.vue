<template>

</template>

<script>
    export default {
        props: ['plan'],

        data() {
            return {
                stripeKey: Timian.stripeKey,
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
                panelLabel: "Subscribe For",
                email: Timian.user.email,
                token: token => {
                    this.formData.stripeToken = token.id;
                    this.formData.stripeEmail = token.email;
                    this.$emit('isLoading', true);

                    window.axios.post('/subscribe', this.$data.formData)
                        .then(response => {
                            console.log('Redirecting...');
                            this.$emit('isLoading', false);
                            window.location.href = Timian.url + "/subscribed";
                        })
                        .catch(error => {
                            this.$emit('isLoading', false);
                            console.log(error);
                            window.flash('danger', error.response.data.status);
                        });
                }
            });
        },

        watch: {
            plan: function(newPlan) {
                this.formData.plan = newPlan.name;
                this.subscribe();
            }
        },

        methods: {
            subscribe() {
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
