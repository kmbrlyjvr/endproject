<template>
<div>
    <div class="custom_nav">
        <div class="custom">
        
        <form method="POST" class="order-trouser" v-on:submit.prevent="orderTrouser">
            <!-- Trouser Color -->
            <h2 class="pick-color"> trousers color</h2>
                <ul class="colors-1">
                       <li v-for="color in defaults.colors" v-bind:key="color" @click="selectTrouserColor(color)" v-bind:style="{ 'background-color': color}">
                       </li>
                 </ul>

            <!-- Color Picker -->
            <h2 class="pick-color">or individual trouser color</h2>
                <input class="inputcustom" type="color" list="presetColors" v-model="config.trouserColor" />
                    <datalist id="presetColors">
                        <option>#363647</option>
                        <option>#4E4E54</option>
                        <option>#354232</option>
                        <option>#0C0C0C</option>
                    </datalist>

            <!-- Pocket Color -->
            <h2 class="pick-color"> pocket color</h2>
                <ul class="colors-2">
                       <li v-for="color in defaults.colors" v-bind:key="color" @click="selectPocketColor(color)" v-bind:style="{ 'background-color': color}">
                       </li>
                </ul>

            <!-- Color Picker -->
            <h2 class="pick-color">or individual pocket color</h2>
                <input class="inputcustom" type="color" list="presetColors" v-model="config.pocketColor" />
                    <datalist id="presetColors">
                        <option>#363647</option>
                        <option>#4E4E54</option>
                        <option>#354232</option>
                        <option>#0C0C0C</option>
                    </datalist>

            <!-- Logo Color -->
            <h2 class="pick-color"> logo color</h2>
                <ul class="colors-3">
                    <li v-for="color in defaults.colors" v-bind:key="color" @click="selectLogoColor(color)" v-bind:style="{ 'background-color': color}">
                    </li>
                </ul>

            <!-- Select size -->
            <h2 class="pick-color"> select size </h2>
                <label>
                    <select class="customselect" v-model="config.size">
                        <p class="text-danger">Please select a Size</p>
                        <option v-for="size in defaults.sizes" v-bind:key="size.id" :value="size.id">
                            {{ size.name }}
                        </option>
                    </select>
                </label>
            
                <!--  Country  -->
            <h2 class="pick-color"> country</h2>
                <label>
                    <select class="customselect" v-model="config.shipping">
                        <p class="text-danger">Please select a Country</p>
                        <option v-for="shipping in defaults.shippings" v-bind:key="shipping.id" :value="shipping.id">
                            {{ shipping.country }}
                        </option>
                    </select>
                </label>
                    
                <button type="submit" class="button" style="color:#f1e1d8; margin:20px;" >Done</button>

        </form>
        </div> <!-- custom -->
    </div><!-- custom nav -->


<section class="trouser">
    <div class="trousers trousers-1 fade">
            <svg-component :config="config" :type="type"></svg-component>
    </div>
</section>

</div>

</template>


<script>
import SvgComponent from './SvgComponent.vue';

export default {

    components: {
        SvgComponent
    },

    props: [
        'showLogoColor'
    ],

    
    data() {
        return {
            type: "trouser",


 /*   #5B352F
#8C5A4E
#7E6863
#A67E6F
#DACDC8
545454
*/
            config: {
                colorPicker: null,
                trouserColor: "#614a45",
                utilityColor: "#ceb7a6",
                overallColor: "#ceb7a6",
                pocketColor: "#ceb7a6",
                logoColor: "#f3f1a0",
                pocketChange: null,
                price: "",
                size: "Small",
                shipping: null,
            },


            defaults: { 
                colors: [
                '#382927',
                '#8C5A4E',
                '#7E6863',
                '#A67E6F',
                '#B79E91'
                ],

                sizes: [
                { 
                    id: 'X-Small', name: 'X-Small'
                },

                { 
                    id: 'Small', name: 'Small'
                },

                { 
                    id: 'Medium', name: 'Medium'
                },

                { 
                    id: 'Large', name: 'Large'
                },

                { 
                    id: 'X-Large', name: 'X-Large'
                }

                ],

                shippings: [

                ],

                total: [

                ]
            }

        }
    },

    computed: {

    },

    methods: {
        selectTrouserColor(color) {
            this.config.trouserColor = color;
        },

         selectPocketColor(color) {
            this.config.pocketColor = color;
        },

         selectLogoColor(color) {
            this.config.logoColor = color;
        },

        orderTrouser(){
            window.axios.post('orderTrouser', {
                config: {
                'size': this.config.size,
                'colorPicker': this.config.colorPicker,
                'trouserColor': this.config.trouserColor,
                'utilityColor': this.config.utilityColor,
                'overallColor': this.config.overallColor,
                'pocketColor': this.config.pocketColor,
                'logoColor': this.config.logoColor,
                'type': this.type,
                'shipping': this.config.shipping,
                'total': this.config.total
                }
            }).then((res)=>{
                window.location.href= '/order';
            }).catch(function(error){
                console.log(error);
            });
        }
    },

    mounted (){
        let type=document.head.querySelector('meta[name="custom-type"]');

        if (type) {
        
        this.type=type.content;

        window.axios.get('/shippings')
          .then((res)=>{
              this.defaults.shippings=res.data;
            }).catch(function(error){
                console.log(error);
            });

        }
    }
}

</script>

   