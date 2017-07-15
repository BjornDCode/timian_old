<template>
    <transition name="slide-fade">
        <div class="alert flash-message" v-bind:class="'alert-' + className" role="alert" v-show="show">
          {{ body }}
        </div>
    </transition>
</template>

<script>
    export default {
        props: ['type', 'message'],

        data() {
            return {
                body: '',
                show: false,
                className: 'success'
            }
        },

        created() {

            if (this.type) {
                this.className = this.type;
            }

            if (this.message) {
                this.flash(this.message);
            }

            window.events.$on('flash', (type, message) => {
                this.className = type;
                this.flash(message);
            });
        },

        methods: {
            flash(message) {
                this.body = message;
                this.show = true;

                this.hide();
            },
            hide() {
                setTimeout(() => {
                    this.show = false;
                }, 5000);
            }
        }
    }
</script>
