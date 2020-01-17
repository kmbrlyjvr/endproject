<template>
<div>
    <div class="custom_nav">
        <div class="custom">
        
        <form method="POST" class="order-trouser" v-on:submit.prevent="orderTrouser">
            <!-- Trouser Color -->
            <h2 class="pick-color">2. Trousers Color</h2>
                <ul class="colors-1">
                       <li v-for="color in defaults.colors" v-bind:key="color" @click="selectTrouserColor(color)" v-bind:style="{ 'background-color': color}">
                       </li>
                 </ul>

            <!-- Color Picker -->
            <h2 class="pick-color">or individual trouser color</h2>
                <input type="color" list="presetColors" v-model="config.trouserColor" />
                    <datalist id="presetColors">
                        <option>#ceb7a6</option>
                        <option>#f3f1a0</option>
                    </datalist>

            <!-- Pocket Color -->
            <h2 class="pick-color">3. Pocket Color</h2>
                <ul class="colors-2">
                       <li v-for="color in defaults.colors" v-bind:key="color" @click="selectPocketColor(color)" v-bind:style="{ 'background-color': color}">
                       </li>
                </ul>

            <!-- Color Picker -->
            <h2 class="pick-color">or individual pocket color</h2>
                <input type="color" list="presetColors" v-model="config.pocketColor" />
                    <datalist id="presetColors">
                        <option>#ceb7a6</option>
                        <option>#f3f1a0</option>
                    </datalist>

            <!-- Logo Color -->
            <h2 class="pick-color">4. Logo Color</h2>
                <ul class="colors-3">
                    <li v-for="color in defaults.colors" v-bind:key="color" @click="selectLogoColor(color)" v-bind:style="{ 'background-color': color}">
                    </li>
                </ul>

            <!-- Select size -->
            <h2 class="pick-color">5. Select Size </h2>
                <label>
                    <select v-model="config.size">
                        <p class="text-danger">Please select a Size</p>
                        <option v-for="size in defaults.sizes" v-bind:key="size.id" :value="size.id">
                            {{ size.name }}
                        </option>
                    </select>
                </label>

            <!--  PRICE  -->
            <h2 class="pick-color">Price 0,00€</h2>
            <p>(Colors are included in the price)</p>
            
            <button type="submit" class="button" style="color:#f1e1d8;" >Done</button>
        </form>
        </div> <!-- custom -->
    </div><!-- custom nav -->


<div class="trouser">
    <div class="trousers trousers-1">
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

            config: {
                colorPicker: null,
                trouserColor: "#614a45",
                utilityColor: "#ceb7a6",
                overallColor: "#ceb7a6",
                pocketColor: "#6e503d",
                logoColor: "#f3f1a0",
                pocketChange: null,
                size: "Small",
            },


            defaults: { 
                colors: [
                '#ceb7a6',
                '#545454',
                '#000000',
                '#bdc3c7',
                '#743f31'
                ],

                sizes: [
                { 
                    id: 'x-small', name: 'X-Small'
                },

                { 
                    id: 'small', name: 'Small'
                },

                { 
                    id: 'Medium', name: 'Medium'
                },

                { 
                    id: 'Large', name: 'Large'
                },

                { 
                    id: 'x-large', name: 'X-Large'
                }

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
                'type': this.type
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

        }
    }
}

</script>

   