<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class HomesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('homes')->delete();
        
        \DB::table('homes')->insert(array (
            0 => 
            array (
            'about_content' => '.Vikram Roller Flour Mills Limited is a pioneer name in the Agro-products manufacturing, packaging, and delivery in India. The company specializes in manufacturing supreme quality wheat products that are consumed by top-level bakers, caterers and FMCG suppliers in the country. Vikram Mills product line includes and is not limited to Wheat Flour (Atta), White Flour (Maida), Rawa, Semolina (Suji), Broken Wheat (Dalia) and Bran (Chokar). Counted amongst top-quality Agro-products enterprises in India, Vikram roller flour mills proudly caters to many legacy clients including Parle, Britannia, Reliance, Haldiram, Tops, Frontier, Roseate House, Crowne Plaza Hotels, and many other recognized FMCG retailers.',
                'benefits_description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elitLorem ipsum dolor sit amet, consectetur adipiscing elitLorem ipsum dolor sit amet, consectetur adipiscing elitLorem ipsum dolor sit amet, consectetur adipiscing elitLorem ipsum dolor sit amet, consectetur adipiscinLorem ipsum dolor sit amet, consectetur adipiscing elitLorem ipsum dolor sit amet, consectetur adipiscing elitLorem ipsum dolor sit amet, consectetur adipiscing elit',
                'created_at' => '2021-09-18 17:47:59',
                'id' => 1,
                'product_description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elitLorem ipsum dolor sit amet, consectetur adipiscing elitLorem ipsum dolor sit amet, consectetur adipiscing elitLorem ipsum dolor sit amet, consectetur adipiscing elitLorem ipsum dolor sit amet, consectetur adipiscinLorem ipsum dolor sit amet, consectetur adipiscing elitLorem ipsum dolor sit amet, consectetur adipiscing elitLorem ipsum dolor sit amet, consectetur adipiscing elit',
                'product_title' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elitLorem ipsum dolor sit amet, consectetur adipiscing',
                'slider1' => 'slider1.jpg',
                'slider2' => 'slider2.jpg',
                'slider3' => 'slider3.jpg',
                'testimonial_description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elitLorem ipsum dolor sit amet, consectetur adipiscing elitLorem ipsum dolor sit amet, consectetur adipiscing elitLorem ipsum dolor sit amet, consectetur adipiscing elitLorem ipsum dolor sit amet, consectetur adipiscinLorem ipsum dolor sit amet, consectetur adipiscing elitLorem ipsum dolor sit amet, consectetur adipiscing elitLorem ipsum dolor sit amet, consectetur adipiscing elit',
                'updated_at' => '2021-09-18 18:33:41',
            ),
        ));
        
        
    }
}