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
                <input type="color" list="presetColors" v-model="trouserColor" />
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

            <!-- Logo Color -->
            <h2 class="pick-color">4. Logo Color</h2>
                <ul class="colors-3">
                    <li v-for="color in defaults.colors" v-bind:key="color" @click="selectLogoColor(color)" v-bind:style="{ 'background-color': color}">
                    </li>
                </ul>

            <!-- Select size -->
            <h2 class="pick-color">5. Select Size </h2>
                <label>
                    <select v-model="size">
                        <p class="text-danger" v-if="size.required">Please select a Size</p>
                        <option v-for="size in defaults.sizes" v-bind:key="size.id" :value="size.id">
                            {{ size.name }}
                        </option>
                    </select>
                </label>

            <!-- Change Pocket -->
            <h2 class="pick-color">6. Change pocket</h2>
            
            <button type="submit" class="savebtn">Done</button>
        </form>
        </div> <!-- custom -->
    </div><!-- custom nav -->


<div class="trouser">
    <div class="trousers trousers-1">
        <!-- svg -->
   <svg id="Layer_1" class="trouser" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 103.52 284.47"  alt="trousers slack" :style="svgStyleProps">

    <title>trousers slacks</title>
    <g v-bind:style="{ 'stroke': trouserColor}">
      <path class="cls1-1" d="M22.37,24.66S14.65,39.91,15.79,84.9s1.51,67.66,1.51,67.66a7.49,7.49,0,0,0,.13,5.41c1.22,2.84.1,9.39.49,17.74s1.15,35.34,1.15,41.1,2.31,3.27,1.92,6.34-2.3,4,.77,13.83c0,0-.82,6.26-.82,9.72s-1,2.35-.28,7.47,2.21,11.77,2.08,12.6c0,0,9.41,4.29,22.42-.83,0,0-.83-16.2-.83-18.69s1.24-4.57.83-8.72-.69-7.61.14-10.66-1.11-4.43,1.1-8.72-.27-17.85.56-31.83,1.94-25.47,1.8-27.13-.83-4.85.27-8.17.14-7.61-.27-10.24,1.38-14.26,1.24-20.35.69-33.63.69-33.63l0-60.86L24.65,24.85Z"/>
      <path class="cls1-1" d="M24.65,24.85s-5.45,26.9-8,28"/>
      <path class="cls1-1" d="M34.23,39.76s-1.8,130.45-2.4,135.86,2.39,22.51,3,30.66c.57,7.54-3.6,8.41-4.2,21.64s3.27,36.34.43,40.68"/>
      <g>
        <path class="cls1-1" d="M79.22,24.66S86.94,39.91,85.8,84.9s-1.51,67.66-1.51,67.66a7.46,7.46,0,0,1-.14,5.41c-1.21,2.84-.09,9.39-.48,17.74s-1.16,35.34-1.16,41.1-2.3,3.27-1.92,6.34,2.31,4-.76,13.83c0,0,.82,6.26.82,9.72s1,2.35.28,7.47-2.22,11.77-2.08,12.6c0,0-9.41,4.29-22.42-.83,0,0,.83-16.2.83-18.69s-1.25-4.57-.83-8.72.69-7.61-.14-10.66,1.11-4.43-1.11-8.72.28-17.85-.55-31.83-1.94-25.47-1.8-27.13.83-4.85-.28-8.17-.13-7.61.28-10.24-1.38-14.26-1.25-20.35-.69-33.63-.69-33.63L51,27l25.9-2.1Z"/>
        <path class="cls1-1" d="M76.94,24.85s5.45,26.9,8,28"/>
        <path class="cls1-1" d="M67.36,39.76s1.8,130.45,2.4,135.86-2.39,22.51-3,30.66c-.56,7.54,3.61,8.41,4.21,21.64s-3.27,36.34-.43,40.68"/>
        <path class="cls1-1" d="M80.59,223.15s-4.38,9.38-6.22,10"/>
        <path class="cls1-1" d="M79.83,237s-8.13,14.58-1.45,4.73"/>
        <path class="cls1-1" d="M57.84,233.86s1.67,4.51,3.5,6.52,2.17,5.51,2.17,5.51"/>
        <path class="cls1-1" d="M58.34,248.06s2.34,4,2.17,5.17-1.35-1.86-2.16-2.87"/>
        <path class="cls1-1" d="M82.77,163.09s-1.4,5.15-1.18,7.19l1.28-4"/>
      </g>
    </g>
    <path class="cls1-2" d="M21,223.15s4.39,9.38,6.23,10"/>
    <path class="cls1-2" d="M21.76,237s8.13,14.58,1.45,4.73"/>
    <path class="cls1-2" d="M43.75,233.86s-1.67,4.51-3.51,6.52-2.17,5.51-2.17,5.51"/>
    <path class="cls1-2" d="M43.25,248.06s-2.34,4-2.17,5.17,1.35-1.86,2.15-2.87"/>
    <path class="cls1-2" d="M18.82,163.09s1.4,5.15,1.18,7.19l-1.29-4"/>
    <g>
      <path class="cls1-2" d="M55.77,26.54s0,.36,0,1"/>
      <path class="cls1-3" d="M55.8,29.58c.09,7.48.27,26.24,0,27A20.22,20.22,0,0,1,52.49,60"/>
      <path class="cls1-2" d="M51.73,60.71l-.75.66"/>
    </g>
    <path class="cls1-1" d="M22.22,20.52s30.55,4.83,56.85.19l1.16,5.61s-38.29,6.38-58.39,0L22,24.5,22,24Z"/>

    <g v-bind:style="{ 'stroke': pocketColor}">
    <polygon class="cls1-4" points="72.01 110.57 87.08 109.99 86.65 149.84 74.77 149.69 71.29 148.1 72.01 110.57"/>
    <polygon class="cls1-4" points="87.08 109.99 88.82 125.5 79.11 126.08 71.43 122.02 72.01 110.57 87.08 109.99"/>
    </g>

    <polyline class="cls1-5" points="86.94 147.96 76.36 148.1 76.36 124.63"/>
    <g>
      <line class="cls1-6" x1="74.33" y1="123.61" x2="74.35" y2="124.61"/>
      <line class="cls1-7" x1="74.38" y1="126.47" x2="74.73" y2="147.77"/>
      <line class="cls1-6" x1="74.75" y1="148.7" x2="74.77" y2="149.69"/>
    </g>
  </svg>

    </div>
</div>

</div>
</template>


<script>
import {required} from "vuelidate/lib/validators"
export default {

    props: [
        'showLogoColor'
    ],
    
    data() {
        return {
            colorPicker: null,
            trouserColor: "#6e503d",
            utilityColor: "ceb7a6",
            pocketColor: "#6e503d",
            logoColor: "#f3f1a0",
            pocketChange: null,
            size: "Small",

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
            },
            valdiations: {
                size: {
                    required
                }
            }
        }
    },

    computed: {
        svgStyleProps() {
            return {
                "--var-trouser-color": this.trouserColor,
                "--var-pocket-color": this.pocketColor,
                "--var-utility-color": this.utilityColor,
                "--var-logo-color": this.logoColor
            }
        }
    },

    methods: {
        selectTrouserColor(color) {
            this.trouserColor = color;
        },

         selectPocketColor(color) {
            this.pocketColor = color;
        },

         selectLogoColor(color) {
            this.logoColor = color;
        },

        orderTrouser(){
            window.axios.post('orderTrouser', {
                config: {
                'size': this.size,
                'colorPicker': this.colorPicker,
                'trouserColor': this.trouserColor,
                'utilityColor': this.utilityColor,
                'pocketColor': this.pocketColor,
                'logoColor': this.logoColor
                }
            }).then((res)=>{
                console.log(res);
            }).catch(function(error){
                console.log(error);
            });
        }
    }
}

</script>

    <style lang="scss">

      :root {
        --var-trouser-color: #6e503d;
        --var-pocket-color: #6e503d;
        }
            
      svg.trouser{
        .cls1-1 {
          fill: var(--var-trouser-color);
        }
        .cls1-1, .cls1-2, .cls1-3, .cls1-4, .cls1-5, .cls1-6, .cls1-7 {
          stroke: #231f20;
        }
  
        .cls1-1, .cls1-4, .cls1-5, .cls1-6, .cls1-7 {
          stroke-miterlimit: 10;
        }
  
        .cls1-2, .cls1-3, .cls1-5, .cls1-6, .cls1-7 {
          fill: none;
          stroke-width: 0.75px;
        }
  
        .cls1-3 {
          stroke-dasharray: 2.05 2.05;
        }
  
        .cls1-4 {
          fill: var(--var-pocket-color);

        }
  
        .cls1-6, .cls1-7 {
          stroke-linecap: square;
        }
  
        .cls1-7 {
          stroke-dasharray: 1.85 1.85;
        }
      }
    </style>
    
   