<script>
import { Modal } from 'bootstrap';
export default {
    props: {
        city: {
            type: String,
            required: true,
        },
    },
    data() {
        return {
            cityDetected: false,
            modal: null,
            userLocation: null, // To store user's location
        };
    },
    mounted() {
        //
        this.modal = new Modal(document.getElementById('cityApproveModal'));
        this.cityDetected = localStorage.getItem('city') || this.city;
        if (localStorage.getItem('city') === null) {
            setTimeout(() => {
                this.modal.show();
            }, 3000);
        }
    },
    methods: {
        //
        setCity(city) {
            localStorage.setItem('city', city);
            this.cityDetected = city;
            this.modal.hide();
            window.location.href = '/set-city/' + city;
        },
    },
    computed: {
        cityDetectedText() {
            return this.city == 'tomsk' ? 'Томск' : 'Асино';
        },
    },
}
</script>

<template>
    
<div class="modal fade" id="cityApproveModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="cityApproveModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <!-- <div class="modal-header">
        <h1 class="modal-title fs-5" id="cityApproveModalLabel">Укажите ваш город</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div> -->
      <div class="modal-body text-center d-flex justify-content-center align-items-center" style="height: 350px;">
          <div class="">
            <h5>Ваш город {{ cityDetectedText }} ?</h5>
            <p>
                Если нет, то выберите свой город:
            </p>
            <div class="btn-group w-100">
                <button @click="setCity('tomsk')" class="btn btn-outline-primary" :class="{ 'active': cityDetected == 'tomsk' }">Томск</button>
                <button @click="setCity('asino')" class="btn btn-outline-primary" :class="{ 'active': cityDetected == 'asino' }">Асино</button>
            </div>
        </div>
      </div>
    </div>
  </div>
</div>

</template>

<style scoped lang="sass">

</style>
