<?php

use App\WebmasterSection;
use Illuminate\Database\Seeder;

class WebmasterSectionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Site pages
        $sections = new WebmasterSection();
        $sections->row_no = 1;
        $sections->name = "sitePages";
        $sections->type = 0;
        $sections->sections_status = 0;
        $sections->comments_status = 0;
        $sections->date_status = 0;
        $sections->longtext_status = 1;
        $sections->editor_status = 1;
        $sections->attach_file_status = 1;
        $sections->multi_images_status = 1;
        $sections->section_icon_status = 1;
        $sections->icon_status = 0;
        $sections->maps_status = 1;
        $sections->order_status = 0;
        $sections->related_status = 0;
        $sections->status = 1;
        $sections->created_by = 1;
        $sections->save();

        // Services
        $sections = new WebmasterSection();
        $sections->row_no = 2;
        $sections->name = "services";
        $sections->type = 0;
        $sections->sections_status = 0;
        $sections->comments_status = 0;
        $sections->date_status = 0;
        $sections->longtext_status = 1;
        $sections->editor_status = 1;
        $sections->attach_file_status = 1;
        $sections->multi_images_status = 1;
        $sections->section_icon_status = 1;
        $sections->icon_status = 0;
        $sections->maps_status = 1;
        $sections->order_status = 1;
        $sections->related_status = 1;
        $sections->status = 1;
        $sections->created_by = 1;
        $sections->save();

        // News
        $sections = new WebmasterSection();
        $sections->row_no = 3;
        $sections->name = "news";
        $sections->type = 0;
        $sections->sections_status = 0;
        $sections->comments_status = 1;
        $sections->date_status = 1;
        $sections->longtext_status = 1;
        $sections->editor_status = 1;
        $sections->attach_file_status = 0;
        $sections->multi_images_status = 1;
        $sections->section_icon_status = 1;
        $sections->icon_status = 0;
        $sections->maps_status = 0;
        $sections->order_status = 0;
        $sections->related_status = 1;
        $sections->status = 1;
        $sections->created_by = 1;
        $sections->save();

        // Photos
        $sections = new WebmasterSection();
        $sections->row_no = 4;
        $sections->name = "photos";
        $sections->type = 1;
        $sections->sections_status = 0;
        $sections->comments_status = 1;
        $sections->date_status = 0;
        $sections->longtext_status = 0;
        $sections->editor_status = 0;
        $sections->attach_file_status = 0;
        $sections->multi_images_status = 1;
        $sections->section_icon_status = 1;
        $sections->icon_status = 0;
        $sections->maps_status = 0;
        $sections->order_status = 0;
        $sections->related_status = 0;
        $sections->status = 1;
        $sections->created_by = 1;
        $sections->save();

        // Videos
        $sections = new WebmasterSection();
        $sections->row_no = 5;
        $sections->name = "videos";
        $sections->type = 2;
        $sections->sections_status = 1;
        $sections->comments_status = 1;
        $sections->date_status = 0;
        $sections->longtext_status = 0;
        $sections->editor_status = 0;
        $sections->attach_file_status = 0;
        $sections->multi_images_status = 0;
        $sections->section_icon_status = 1;
        $sections->icon_status = 0;
        $sections->maps_status = 0;
        $sections->order_status = 0;
        $sections->related_status = 1;
        $sections->status = 1;
        $sections->created_by = 1;
        $sections->save();

        // Sounds
        $sections = new WebmasterSection();
        $sections->row_no = 6;
        $sections->name = "sounds";
        $sections->type = 3;
        $sections->sections_status = 1;
        $sections->comments_status = 1;
        $sections->date_status = 0;
        $sections->longtext_status = 0;
        $sections->editor_status = 0;
        $sections->attach_file_status = 0;
        $sections->multi_images_status = 0;
        $sections->section_icon_status = 1;
        $sections->icon_status = 0;
        $sections->maps_status = 0;
        $sections->order_status = 0;
        $sections->related_status = 1;
        $sections->status = 1;
        $sections->created_by = 1;
        $sections->save();

        // Articles
        $sections = new WebmasterSection();
        $sections->row_no = 7;
        $sections->name = "blog";
        $sections->type = 0;
        $sections->sections_status = 1;
        $sections->comments_status = 1;
        $sections->date_status = 1;
        $sections->longtext_status = 1;
        $sections->editor_status = 1;
        $sections->attach_file_status = 0;
        $sections->multi_images_status = 1;
        $sections->section_icon_status = 1;
        $sections->icon_status = 0;
        $sections->maps_status = 0;
        $sections->order_status = 0;
        $sections->related_status = 1;
        $sections->status = 1;
        $sections->created_by = 1;
        $sections->save();

        // Products
        $sections = new WebmasterSection();
        $sections->row_no = 8;
        $sections->name = "products";
        $sections->type = 0;
        $sections->sections_status = 2;
        $sections->comments_status = 1;
        $sections->date_status = 0;
        $sections->longtext_status = 1;
        $sections->editor_status = 1;
        $sections->attach_file_status = 0;
        $sections->multi_images_status = 1;
        $sections->section_icon_status = 1;
        $sections->icon_status = 0;
        $sections->maps_status = 0;
        $sections->order_status = 1;
        $sections->related_status = 1;
        $sections->status = 1;
        $sections->created_by = 1;
        $sections->save();

        // Partners
        $sections = new WebmasterSection();
        $sections->row_no = 9;
        $sections->name = "partners";
        $sections->type = 0;
        $sections->sections_status = 0;
        $sections->comments_status = 0;
        $sections->date_status = 0;
        $sections->longtext_status = 0;
        $sections->editor_status = 0;
        $sections->attach_file_status = 0;
        $sections->multi_images_status = 0;
        $sections->section_icon_status = 0;
        $sections->icon_status = 0;
        $sections->maps_status = 0;
        $sections->order_status = 0;
        $sections->related_status = 0;
        $sections->status = 1;
        $sections->created_by = 1;
        $sections->save();
        // Best_view
        $sections = new WebmasterSection();
        $sections->row_no = 10;
        $sections->name = "Best_view";
        $sections->type = 0;
        $sections->sections_status = 0;
        $sections->comments_status = 0;
        $sections->date_status = 0;
        $sections->longtext_status = 1;
        $sections->editor_status = 0;
        $sections->attach_file_status = 0;
        $sections->multi_images_status = 0;
        $sections->section_icon_status = 0;
        $sections->icon_status = 0;
        $sections->maps_status = 0;
        $sections->order_status = 0;
        $sections->related_status = 0;
        $sections->status = 1;
        $sections->created_by = 1;
        $sections->save();
        // Hotels
        $sections = new WebmasterSection();
        $sections->row_no = 11;
        $sections->name = "Hotels";
        $sections->type = 0;
        $sections->sections_status = 0;
        $sections->comments_status = 0;
        $sections->date_status = 0;
        $sections->day_status = 1;
        $sections->status_appear = 1;
        $sections->night_status = 1;
        $sections->longtext_status = 0;
        $sections->editor_status = 0;
        $sections->attach_file_status = 0;
        $sections->multi_images_status = 0;
        $sections->section_icon_status = 0;
        $sections->icon_status = 0;
        $sections->maps_status = 0;
        $sections->order_status = 0;
        $sections->related_status = 0;
        $sections->status = 1;
        $sections->created_by = 1;
        $sections->save();
        // Partners
        $sections = new WebmasterSection();
        $sections->row_no = 12;
        $sections->name = "Flightreservations";
        $sections->type = 0;
        $sections->sections_status = 0;
        $sections->comments_status = 0;
        $sections->date_status = 0;
        $sections->longtext_status = 0;
        $sections->editor_status = 0;
        $sections->attach_file_status = 0;
        $sections->multi_images_status = 0;
        $sections->section_icon_status = 0;
        $sections->icon_status = 0;
        $sections->maps_status = 0;
        $sections->order_status = 0;
        $sections->status_appear = 1;
        $sections->related_status = 0;
        $sections->hotel_air_status = 1;
        $sections->status = 1;
        $sections->created_by = 1;
        $sections->updated_by = 1;
        $sections->save();

        // Partners
        $sections = new WebmasterSection();
        $sections->row_no = 14;
        $sections->name = "hotelreservations";
        $sections->type = 0;
        $sections->sections_status = 0;
        $sections->comments_status = 0;
        $sections->date_status = 0;
        $sections->longtext_status = 0;
        $sections->editor_status = 0;
        $sections->attach_file_status = 0;
        $sections->multi_images_status = 0;
        $sections->section_icon_status = 0;
        $sections->icon_status = 0;
        $sections->maps_status = 0;
        $sections->order_status = 0;
        $sections->related_status = 0;
        $sections->hotel_air_status = 2;
        $sections->status = 1;
        $sections->created_by = 1;
        $sections->save();
        // Partners
        $sections = new WebmasterSection();
        $sections->row_no = 15;
        $sections->name = "hotel_flight_reservations";
        $sections->type = 0;
        $sections->sections_status = 2;
        $sections->comments_status = 0;
        $sections->date_status = 0;
        $sections->longtext_status = 0;
        $sections->editor_status = 0;
        $sections->attach_file_status = 0;
        $sections->multi_images_status = 0;
        $sections->section_icon_status = 0;
        $sections->icon_status = 0;
        $sections->maps_status = 0;
        $sections->order_status = 0;
        $sections->related_status = 0;
        $sections->hotel_air_status = 3;
        $sections->status = 1;
        $sections->created_by = 1;
        $sections->save();
        // Partners
        $sections = new WebmasterSection();
        $sections->row_no = 16;
        $sections->name = "agree";
        $sections->type = 0;
        $sections->sections_status = 0;
        $sections->comments_status = 0;
        $sections->date_status = 0;
        $sections->longtext_status = 0;
        $sections->editor_status = 0;
        $sections->attach_file_status = 0;
        $sections->multi_images_status = 0;
        $sections->section_icon_status = 0;
        $sections->icon_status = 0;
        $sections->maps_status = 0;
        $sections->order_status = 0;
        $sections->related_status = 0;
        $sections->hotel_air_status = 1;
        $sections->status = 1;
        $sections->created_by = 1;
        $sections->save();
        // Partners
        $sections = new WebmasterSection();
        $sections->row_no = 17;
        $sections->name = "new_book";
        $sections->type = 0;
        $sections->sections_status = 0;
        $sections->comments_status = 0;
        $sections->date_status = 0;
        $sections->longtext_status = 0;
        $sections->editor_status = 0;
        $sections->attach_file_status = 0;
        $sections->multi_images_status = 0;
        $sections->section_icon_status = 0;
        $sections->icon_status = 0;
        $sections->maps_status = 0;
        $sections->order_status = 0;
        $sections->related_status = 0;
        $sections->hotel_air_status	 = 1;
        $sections->status = 1;
        $sections->created_by = 1;
        $sections->save();
        // Partners
        $sections = new WebmasterSection();
        $sections->row_no = 18;
        $sections->name = "notagree";
        $sections->type = 0;
        $sections->sections_status = 0;
        $sections->comments_status = 0;
        $sections->date_status = 0;
        $sections->longtext_status = 0;
        $sections->editor_status = 0;
        $sections->attach_file_status = 0;
        $sections->multi_images_status = 0;
        $sections->section_icon_status = 0;
        $sections->icon_status = 0;
        $sections->maps_status = 0;
        $sections->order_status = 0;
        $sections->related_status = 0;
        $sections->hotel_air_status = 1;
        $sections->agree_status	 = 3;
        $sections->status = 1;
        $sections->created_by = 1;
        $sections->save();
        // Partners
        $sections = new WebmasterSection();
        $sections->row_no = 19;
        $sections->name = "new_book_hotel";
        $sections->type = 0;
        $sections->sections_status = 0;
        $sections->comments_status = 0;
        $sections->date_status = 0;
        $sections->longtext_status = 0;
        $sections->editor_status = 0;
        $sections->attach_file_status = 0;
        $sections->multi_images_status = 0;
        $sections->section_icon_status = 0;
        $sections->icon_status = 0;
        $sections->maps_status = 0;
        $sections->order_status = 0;
        $sections->related_status = 0;
        $sections->hotel_air_status = 1;
        $sections->status = 1;
        $sections->created_by = 1;
        $sections->save();
        // Partners
        $sections = new WebmasterSection();
        $sections->row_no = 20;
        $sections->name = "new_book_h_ar";
        $sections->type = 0;
        $sections->sections_status = 0;
        $sections->comments_status = 0;
        $sections->date_status = 0;
        $sections->longtext_status = 0;
        $sections->editor_status = 0;
        $sections->attach_file_status = 0;
        $sections->multi_images_status = 0;
        $sections->section_icon_status = 0;
        $sections->icon_status = 0;
        $sections->maps_status = 0;
        $sections->order_status = 0;
        $sections->related_status = 0;
        $sections->hotel_air_status = 1;
        $sections->status = 1;
        $sections->created_by = 1;
        $sections->save();
        // Partners
        $sections = new WebmasterSection();
        $sections->row_no = 21;
        $sections->name = "agree1";
        $sections->type = 0;
        $sections->sections_status = 0;
        $sections->comments_status = 0;
        $sections->date_status = 0;
        $sections->longtext_status = 0;
        $sections->editor_status = 0;
        $sections->attach_file_status = 0;
        $sections->multi_images_status = 0;
        $sections->section_icon_status = 0;
        $sections->icon_status = 0;
        $sections->maps_status = 0;
        $sections->order_status = 0;
        $sections->related_status = 0;
        $sections->hotel_air_status = 1;
        $sections->status = 1;
        $sections->created_by = 1;
        $sections->save();
        // Partners
        $sections = new WebmasterSection();
        $sections->row_no = 22;
        $sections->name = "1notagree";
        $sections->type = 0;
        $sections->sections_status = 0;
        $sections->comments_status = 0;
        $sections->date_status = 0;
        $sections->longtext_status = 0;
        $sections->editor_status = 0;
        $sections->attach_file_status = 0;
        $sections->multi_images_status = 0;
        $sections->section_icon_status = 0;
        $sections->icon_status = 0;
        $sections->maps_status = 0;
        $sections->order_status = 0;
        $sections->related_status = 0;
        $sections->hotel_air_status = 1;
        $sections->status = 1;
        $sections->created_by = 1;
        $sections->save();
        // Partners
        $sections = new WebmasterSection();
        $sections->row_no = 23;
        $sections->name = "agree2";
        $sections->type = 0;
        $sections->sections_status = 0;
        $sections->comments_status = 0;
        $sections->date_status = 0;
        $sections->longtext_status = 0;
        $sections->editor_status = 0;
        $sections->attach_file_status = 0;
        $sections->multi_images_status = 0;
        $sections->section_icon_status = 0;
        $sections->icon_status = 0;
        $sections->maps_status = 0;
        $sections->order_status = 0;
        $sections->related_status = 0;
        $sections->hotel_air_status = 1;
        $sections->status = 1;
        $sections->created_by = 1;
        $sections->save();
        // Partners
        $sections = new WebmasterSection();
        $sections->row_no = 24;
        $sections->name = "2notagree";
        $sections->type = 0;
        $sections->sections_status = 0;
        $sections->comments_status = 0;
        $sections->date_status = 0;
        $sections->longtext_status = 0;
        $sections->editor_status = 0;
        $sections->attach_file_status = 0;
        $sections->multi_images_status = 0;
        $sections->section_icon_status = 0;
        $sections->icon_status = 0;
        $sections->maps_status = 0;
        $sections->order_status = 0;
        $sections->related_status = 0;
        $sections->hotel_air_status = 1;
        $sections->status = 1;
        $sections->created_by = 1;
        $sections->save();


    }
}
