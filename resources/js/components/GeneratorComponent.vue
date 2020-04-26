<script type="application/javascript" src="public/js/main.js"></script>

<template>

<div>
    <section class="custom_nav">
        <div class="custom">
        
        <form method="POST" class="order-trouser" v-on:submit.prevent="orderTrouser">
            <!-- Trouser Color -->
            <h2 class="pick-color outer">color</h2>
                <ul class="colors-1 fadeIn">
                       <li v-for="color in defaults.colors" v-bind:key="color" @click="selectTrouserColor(color)" v-bind:style="{ 'background-color': color}">
                       </li>
                 </ul>

            <!-- Color Picker -->
           <!-- <h2 class="pick-color outer" style="font-size: 20px;">or pick a trouser color</h2>
                <input class="inputcustom fadeIn" type="color" list="presetColors" v-model="config.trouserColor" />
                    <datalist id="presetColors">
                        <option>#ceb7a6</option>
                        <option>#f3f1a0</option>
                    </datalist>-->

            <!-- Pocket Color -->
            <h2 class="pick-color outer"> pocket color</h2>
                <ul class="colors-2 fadeIn">
                       <li v-for="color in defaults.colors" v-bind:key="color" @click="selectPocketColor(color)" v-bind:style="{ 'background-color': color}">
                       </li>
                </ul>

            <!-- Color Picker -->
           <!-- <h2 class="pick-color outer" style="font-size: 20px;">or pick a pocket color</h2>
                <input class="inputcustom fadeIn" type="color" list="presetColors" v-model="config.pocketColor" />
                    <datalist id="presetColors">
                        <option>#ceb7a6</option>
                        <option>#f3f1a0</option>
                    </datalist>-->

            <!-- Belt Color -->
            <div class="beltcolor" v-if="type=='trouser'">
                <h2 class="pick-color outer"> belt color</h2>
                    <ul class="colors-3 fadeIn">
                        <li v-for="color in defaults.colors" v-bind:key="color" @click="selectBeltColor(color)" v-bind:style="{ 'background-color': color}">
                        </li>
                    </ul>
            </div>

              <!-- Belt Color -->
            <div class="beltcolor" v-if="type=='overall'">
                <h2 class="pick-color outer"> belt color</h2>
                    <ul class="colors-3 fadeIn">
                        <li v-for="color in defaults.colors" v-bind:key="color" @click="selectBeltColor(color)" v-bind:style="{ 'background-color': color}">
                        </li>
                    </ul>
            </div>

            <!-- Logo Color   v-if="type=='utility'"-->
            <div class="logocolor">
            <h2 class="pick-color outer"> logo color</h2>
                <ul class="colors-3 fadeIn">
                    <li v-for="color in defaults.colors" v-bind:key="color" @click="selectLogoColor(color)" v-bind:style="{ 'background-color': color}">
                    </li>
                </ul>
            </div>

            <!-- Color Picker -->
            <h2 class="pick-color outer" style="font-size: 20px;">or pick a logo color</h2>
                <input class="inputcustom fadeIn" type="color" list="presetColors" v-model="config.logoColor" />
                    <datalist id="presetColors">
                        <option>#ceb7a6</option>
                        <option>#f3f1a0</option>
                    </datalist>

            <!-- Select size -->
            <h2 class="pick-color outer"> select size </h2>
                <label>
                    <select class="customselect fadeIn" v-model="config.size">
                        <p class="text-danger">Please select a Size</p>
                        <option v-for="size in defaults.sizes" v-bind:key="size.id" :value="size.id">
                            {{ size.name }}
                        </option>
                    </select>
                </label>
            
                <!--  Country  -->
            <h2 class="pick-color outer"> country</h2>
                <label>
                    <select class="customselect fadeIn" v-model="config.shipping">
                        <p class="text-danger">Please select a Country</p>
                        <option v-for="shipping in defaults.shippings" v-bind:key="shipping.id" :value="shipping.id">
                            {{ shipping.country }}
                        </option>
                    </select>
                </label>
                    
                <button type="submit" class="button" style="color:#f1e1d8; margin:20px;" >Done</button>

        </form>
        </div> <!-- custom -->
    </section><!-- custom nav -->


<div class="trouser">
    <div class="trousers trousers-1 fadeIn">
            <svg-component :config="config" :type="type"></svg-component>
    </div>
</div>

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


 /*   
#5B352F
#8C5A4E
#7E6863
#A67E6F
#DACDC8
545454
*/
            config: {
                colorPicker: null,
                trouserColor: "#3a2929",
                utilityColor: "#ceb7a6",
                overallColor: "#ceb7a6",
                pocketColor: "#ceb7a6",
                logoColor: "#f3f1a0",
                beltColor: "#614a45",
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

                colorsbastoz: [
                '#382927',
                '#8C5A4E',
                '#000000'
                    
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

         selectBeltColor(color) {
            this.config.beltColor = color;
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
                'beltColor': this.config.beltColor,
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

   