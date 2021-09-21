<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class AboutsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('abouts')->delete();
        
        \DB::table('abouts')->insert(array (
            0 => 
            array (
                'about_banner' => 'about_banner.jpg',
            'about_content' => '.Vikram Roller Flour Mills Limited is a pioneer name in the Agro-products manufacturing, packaging, and delivery in India. The company specializes in manufacturing supreme quality wheat products that are consumed by top-level bakers, caterers and FMCG suppliers in the country. Vikram Mills product line includes and is not limited to Wheat Flour (Atta), White Flour (Maida), Rawa, Semolina (Suji), Broken Wheat (Dalia) and Bran (Chokar). Counted amongst top-quality Agro-products enterprises in India, Vikram roller flour mills proudly caters to many legacy clients including Parle, Britannia, Reliance, Haldiram, Tops, Frontier, Roseate House, Crowne Plaza Hotels, and many other recognized FMCG retailers.',
                'about_pic' => 'about_pic.jpg',
                'brand_content' => '\'INDIA GATE,\' the flagship brand of vikram roller flour mills has already become an insignia of quality and trust in the agro-products market. Sporting a great end-to-end network of supply chain, this brand has become a \'go-to\' choice for major retailers in the local as well as the national market. Vikram roller flour mills produces all the wheat-based products under this brand name, acting as a crucial step in forging the market identity and name recognition of the company.

Vikram roller flour mills name has now become synonymous with quality. The company holds all the required certifications needed for the FMCG industry, making it stand out from the crowd of other retail players of wheat players in India. The company holds FSSAI and ISO certifications reflecting the strict adherence to standards and parameters set by the government.',
                'brand_pic' => 'brand_pic.jpg',
                'created_at' => '2021-09-18 09:56:25',
                'gallery_id' => NULL,
                'id' => 1,
                'our_history_content' => 'Founded in 1973 in New Delhi, Vikram roller flour mills has sustained constant growth since then. In this remarkable journey of more than four decades, the company has marked its presence in the market with its unparalleled commitment towards quality and excellent business relations, making it the most sought-after brand in the Agro FMCG segment. It is the company\'s grand vision and mission statements that have propelled vikram roller flour mills to where it stands today. The credit for the success accumulated in the glorious past years can be rightly given to the wise values of the management that are laser-focused on business ethics, quality standards, and unmatched Customer satisfaction.',
                'our_history_pic' => 'our_history_pic.jpg',
                'our_management_content' => 'The year 2010 witnessed the transformation of the company\'s management with Shri Pawan Kumar Gupta taking command of the vikram roller flour mills operations and delivery as the new Managing Director. Mr. Gupta is a recognized visionary amongst his peers and professional network, especially known for his generous and philanthropic nature. He is a passionate second-generation businessman possessing a rich professional experience of more than three decades in Commodity Market and Trading Business..

Shri Pawan Kumar Gupta transformed the vikram roller flour mills plant into a fully automatic setup that requires no human intervention. The entire process right from the beginning, i.e, washing, grinding to the end stage of packaging is automated. Mr. Gupta\'s philosophy behind this step was to increase the plant\'s production capacity while boosting the efficiency and reducing wastage. Also, a noble thought behind the automation of the Milling machinery was that the employees and the workers function under much more safer conditions than any other plant.',
                'our_management_pic' => 'our_management_pic.jpg',
                'our_mission' => 'With a strong workforce that shares a common vision, Vikram roller flour mills is on a mission to contribute not just to the end customer and clients, but also to the Indian farming ecosystem that acts as the primary movers of this industry. We aim to contribute to the Indian economy, ensure a healthy staple diet for the people, and build our vision brick by brick. While manufacturing supreme wheat agro-products is our passion, we also ensure our participation in activities aligned towards the betterment of humanity, nation, and our society as a collective.',
                'our_mission_background' => NULL,
                'our_vision_background' => NULL,
                'our_vision_content' => 'Is to gain recognition in the FMCG agro-products market by delivering products of finesse quality to the people, and contribute not just to their nutrition, but also enhance their quality of life. Vikram roller flour mills holds a crystal clear vision to cater to the young and growing population of India with the pristine processed-wheat products, and be recognized as the go-to brand for the quality products we deliver.',
                'pic_after_why_choose_us_content' => 'pic_after_why_choose_us_content.jpg',
                'updated_at' => '2021-09-18 13:53:53',
                'why_choose_us_content' => 'Our professional ethics, ultra-pure product quality and willingness to form long-term business relations are the key reasons for you to form a long-lasting business partnership with us. Vikram roller flour mills is famed for
Finest Quality: Be it any wheat-based product, our quality sometimes even exceeds the prescribed government standards in many instances. Our employees, mill workers, and senior management are very quality-sensitive when it comes to processing, producing, packaging and delivering the final product.
Automated Equipment: It would only be fair to say that we are consistently able to maintain our renowned product quality with the aid of the latest machines and equipment. Automation has helped us achieve precision, efficiency and boosted production capability.
Legacy Clientele: Vikram roller flour mills has scored renowned industry giants as its clients. Brands like Parle, Britannia, Priyagold, Tops, etc. get a constant supply of our products. We would like to add you as an esteemed client in our portfolio as well.
Growing player in the market: We were emerging a few decades back, now we are growing. Our brand \'India Gate\' has established its market presence and has since maintained a stronghold. Thanks to the company\'s values, strategy, and ethics, Vikram roller flour mills is one of the fastest growing enterprises in this segment.',
            ),
        ));
        
        
    }
}