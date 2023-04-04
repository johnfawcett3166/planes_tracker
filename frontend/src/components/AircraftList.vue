<template>
    <div class="container">
      <div class="col">
        <aircraft-detail :aircraft-detail="selectedAircraft" />
      </div>
      <div class="row">
        <div class="col">
          <div class="row" v-for="(plane, index) in aircraft" :key="index">
            <div class="col" @click="showDetail(plane)">
              <div class="card">
                <div class="card-header">
                  <h5 class="mb-0">{{ plane.Reg }}</h5>
                </div>
                <div class="card-body">
                  <p class="card-text">
                    Altitude: {{ plane.Alt }} feet<br/>
                    Operator: {{ plane.Op }}<br/>
                    Lat Coordinate: {{ plane.Lat }}<br/>
                    Lon Coordinate: {{ plane.Long }}<br/>
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
  </div>
</template>

<script>
import axios from 'axios';
import aircraftDetail from "@/components/AircraftDetail";

export default {
  name: 'AircraftList',
  components: {
    aircraftDetail
  },

  mounted() {
    this.refreshData();
    setInterval(() => {
      this.refreshData();
    }, 7200);
  },
  data() {
    return {
      iso: 'gb',
      aircraft: null,
      selectedAircraft: null,
    }

  },
  methods: {
    showDetail(planeDetail) {
      this.selectedAircraft = planeDetail;
    },
    refreshData() {
      axios.get('http://backend.test/api/aircraft').then(response => {
        this.aircraft = response.data.acList;
      });
    },
  }
}
</script>

<style scoped>
h3 {
  margin: 40px 0 0;
}
ul {
  list-style-type: none;
  padding: 0;
}
li {
  display: inline-block;
  margin: 0 10px;
}
a {
  color: #42b983;
}
</style>
