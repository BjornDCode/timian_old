<template>
    <form class="checkout-form" action="" method="post">
        <button type="submit" @click.prevent="buy" class="btn btn-primary" >Select Plan</button>
    </form>
</template>

<script>
    export default {
        props: ['name', 'description', 'price'],

        data() {
            return {
                stripeKey: window.stripeKey,
                formData: {
                    stripeEmail: '',
                    stripeToken: '',
                    plan: this.name
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

        methods: {
            buy() {
                this.stripe.open({
                    name: this.name,
                    description: this.description,
                    zipCode: true,
                    amount: this.price
                });
            }
        }
    }
</script>
