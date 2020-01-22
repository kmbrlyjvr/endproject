@extends('layouts.master')
@section('container')

<div class="defaultcontainer">
    <h2 class="title">about</h2>

    <div class="aboutcontainer">
        <!--<a href="{{ URL::previous() }}" class="back_button">Back</a> -->

        <div class="aboutheroimage"><img src="imgs/blackwater.jpg" alt="black water"></div>
            <div class="aboutpost">
            <h2>story of sinta</h2>

            <p>The idea of SINTA started at the beginning of 2018 when founder Kimberly Javier wanted to create a conscious brand that neither exploited our planet or workers, yet still designed with quality 
                and ready to wear. The styles of our brand reflects the personal style of its founders - gender fluid, comfort, personalized and wardrobe staples that can be restyled and reworn for a long time. 
                Kimberly partnered with Aljohn Rosimo in the creative process and started sourcing and researching fabrics and manufacturers in Vietnam in March 2018. Although a few fashion companies had 
                sought out to work with Kimberly in founding the brand, she wanted to truly grow as an entrepreneur and decided to invest independently to create SINTA and also help independent Designers to make 
                a name for themselves as for Sinta too.
                
            </p>
            </div>
        </div>
        <div class="aboutlogo">
                <img src="imgs/logo_transparent.svg">
                <img src="imgs/logo_transparent.svg">
                <img src="imgs/logo_transparent.svg">
                <img src="imgs/logo_transparent.svg">
        </div><br>

    <div class="aboutinfos">

        <!-- Production -->
        <div class="aboutproduction">
            <h2 class="title2">Production</h2>
            <p>  
                 Transparency in the production is of high importance for SINTA, thus why every stage of 
                 the manufacturing and creative process has personally been sourced, inspected or created by 
                 its founders Kimberly Javier and Aljohn Rosimo. By choosing to work with smaller or private owned 
                 factories, we could ensure a good work climate and ethics in production. 
                 <br>
                 <br>
                 <span class="highlightnude">OUR FACTORY: BINH DUONG</span> 
                 A factory we are working with, situated in Binh Duong just an hour away from Ho Chi Minh 
                 City, is owned by Minh Duc Nguyen, a 22 year old design student with dreams of being a 
                 haute couture fashion designer. His family built a workshop next to their house, that 
                 he later turned in to a small factory. He has 3 seamstresses working for him, that are 
                 also able to sew clothes in the comfort of their homes. Such a small factory can only produce 
                 a reasonable amount of clothing and since SINTAvalues quality, sustainability and ethical 
                 production - slow fashion is the perfect way to express it.

                 <div class="productionimgs">
                     <img src="imgs/production1.jpg" alt="woman who's organizing trousers">
                     <img src="imgs/production2.jpg" alt="woman who's organizing trousers">
                     <img src="imgs/production3.jpg" alt="woman who's organizing trousers">

                 </div>

                 <br>      
                 <br>
                <span class="highlightnude">DEADSTOCK</span> 
                Each piece of our clothing is sourced sustainably. The first collection is entirely made from deadstock materials, 
                therefore each piece is limited in quantity since we produce until the roll of fabric we've sourced is out.
                So what is deadstock? The same way thrifting is a sustainable way of shopping to minimize waste as an end consumeer, 
                sourcing deadstock is like thrifting for the fashion industry. Deadstock fabric is waste or leftover fabrics from 
                suppliers or factories that no longer have use for them. Usually these rolls are thrown in landfills and some brands 
                even burn their leftover fabric. Since Vietnam is a huge exporter of fabrics, it also means there's a vast amount of 
                deadstock fabrics there. After a lot of research we found a few fabric markets in Ho Chi Minh City specializing in 
                purely deadstock. For future collections SINTA will also look in to other alternatives of sustainable fabrics 
                such as tencel, econyl and organic cotton.
            </p>

        </div>
        <!-- Sustainability -->
            <div class="aboutsustain">
                <h2 class="title2">Sustainability</h2>
                <p> 
                    Minimizing our impact on the climate is a main priority for SINTA. In each 
                    part of the supply chain we have researched for the most feasible solution ranging 
                    from sourcing fabrics, materials, packaging and production.
                    <br>
                    <br>
                 
                    <span class="highlightnude">PACKAGING</span> 
                    All our products are shipped in recycled paper bags or recycled cardboard boxes. 
                    We've avoided plastics and have been researching other materials such as compostable ecomailers. 
                    As an independent startup, we concluded that recycled paper would be the best initial option for us and our consumers internationally.
                    <br>
                    <br>
                    <span class="highlightnude"> FAIR PRODUCTION</span> 
                    We have chosen to work with smaller factories in Vietnam that are transparent with their work 
                    ethics for fair working conditions of their workers. We have personally visited our factories and 
                    inspected their processes to build trust with our suppliers. Read more about our production here.
                </p>
                <br>
                <br>
                <h2 class="title2">Contact</h2>
                <p> <span class="highlightnude">contact@sinta.ph</span><br><br>
                    Ground Level, Greenbelt 5, Legazpi St.,<br>
                    Ayala Center, Makati, Philippines<br>
                    Daily 11AM — 9PM<br><br>

                    Neubaugasse 26, 1060 <br>Vienna, Austria<br>
                    Mon-Sat 8am - 6pm
                </p>
                <p class="links"><a href="/terms">Terms & Conditions</a></p>
            </div>
            <br>
            <br>
            <p>© 2018 Sinta Philippines/Austria</p>
     </div>

@endsection

