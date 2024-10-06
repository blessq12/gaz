<script>
export default {
    name: 'CoockiePopup',
    data() {
        return {
            show: false,
        }
    },
    mounted() {
        if (localStorage.getItem('cookiePopup') !== 'closed') {
            setTimeout(() => {
                this.show = true
            }, 3000)
        }
    },
    methods: {
        close() {
            this.show = false
            localStorage.setItem('cookiePopup', 'closed')
        }
    }
}
</script>


<template>
    <div class="wrap invisible">
        <div class="container py-3">
            <div class="row justify-content-center">
                <div class="col-12 col-lg-5">
                    <transition
                        enter-active-class="animate__animated animate__fadeInUp"
                        leave-active-class="animate__animated animate__fadeOutDown"
                        mode="out-in"
                    >
                        <div class="popup visible" v-if="show">
                            <h6>Мы используем cookies файлы</h6>
                            <p class="mb-1">
                                Наш сайт использует cookies и другие идентифицирующие данные для улучшения работы сайта и его анализа.
                                <a href="/privacy-policy">Политика конфиденциальности</a>
                            </p>
                            <button class="btn btn-primary btn-sm rounded-pill" @click="close">
                                Понятно
                            </button>
                        </div>
                    </transition>
                </div>
            </div>
        </div>
    </div>
</template>


<style lang="sass" scoped>
button
    font-size: 12px
h6
    margin-bottom: 4px
p
    font-size: 12px
    margin-bottom: 8px !important
.wrap
    position: fixed
    bottom: 0
    left: 0
    right: 0
    height: 100%
    z-index: 1000
    
    padding: 10px 0
    display: flex
    align-items: end
    .popup
        background: #fff
        padding: 10px
        border-radius: 10px
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1)
        width: 100%
        max-width: 500px
        margin: 0 auto
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.2)
</style>