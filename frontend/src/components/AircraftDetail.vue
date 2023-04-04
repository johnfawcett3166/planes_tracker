<template>
    <div class="container">
      <div class="col">
        <div class="card">
          <div class="card-header">
            <h5 class="mb-0">Aircraft Details</h5>
          </div>
          <div class="card-body">
            <p v-if="aircraftDetail" class="card-text">
              Operator: {{ aircraftDetail.Op }}<br>
              CallSign: {{ aircraftDetail.Call }}<br>
              Country: <flag :iso="getCountryIso" /> {{ aircraftDetail.Cou }}<br>
              Lat: {{ aircraftDetail.Lat }}<br>
              Long: {{ aircraftDetail.Long }}<br>
              Squawk: {{ aircraftDetail.Sqk }}<br>
            </p>
            <p v-else class="card-text">Please select an aircraft from the list below<br></p>
          </div>
        </div>
      </div>
  </div>
</template>

<script>

import {countryToAlpha2} from "country-to-iso";

export default {
  name: 'AircraftDetail',
  props: {
    aircraftDetail: {
      type: Object,
      default: null
    }
  },
  computed: {
    getCountryIso() {
      return countryToAlpha2(this.aircraftDetail.Cou);
    }
  },
}
</script>
