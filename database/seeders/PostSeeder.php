<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $posts = [
            ['id' => '1', 'title' => 'Why does your business need a chatbot?', 'slug' => 'why-does-your-business-need-a-chatbot', 'type' => 'faq', 'status' => '1', 'featured' => '1', 'lang' => 'en', 'created_at' => '2023-03-06 10:17:03', 'updated_at' => '2023-03-06 10:17:03'],
            ['id' => '2', 'title' => 'Do I need a credit card to sign up?', 'slug' => 'do-i-need-a-credit-card-to-sign-up', 'type' => 'faq', 'status' => '1', 'featured' => '1', 'lang' => 'en', 'created_at' => '2023-03-06 10:17:50', 'updated_at' => '2023-03-06 10:17:50'],
            ['id' => '3', 'title' => 'Do you offer a 30 day money-back guarantee?', 'slug' => 'do-you-offer-a-30-day-money-back-guarantee', 'type' => 'faq', 'status' => '1', 'featured' => '1', 'lang' => 'en', 'created_at' => '2023-03-06 10:18:16', 'updated_at' => '2023-03-06 10:18:16'],
            ['id' => '4', 'title' => 'Darlene Robertson', 'slug' => 'Product Manager', 'type' => 'team', 'status' => '1', 'featured' => '1', 'lang' => 'en', 'created_at' => '2023-03-06 17:53:17', 'updated_at' => '2023-03-06 17:53:17'],
            ['id' => '5', 'title' => 'Bessie Cooper', 'slug' => 'Vp People', 'type' => 'team', 'status' => '1', 'featured' => '1', 'lang' => 'en', 'created_at' => '2023-03-06 17:54:06', 'updated_at' => '2023-03-06 17:54:06'],
            ['id' => '6', 'title' => 'Eleanor Pena', 'slug' => 'Head of Design', 'type' => 'team', 'status' => '1', 'featured' => '1', 'lang' => 'en', 'created_at' => '2023-03-06 17:54:44', 'updated_at' => '2023-03-06 17:54:44'],
            ['id' => '7', 'title' => 'Rhonda Ortiz', 'slug' => 'Founder & CO', 'type' => 'team', 'status' => '1', 'featured' => '1', 'lang' => 'en', 'created_at' => '2023-03-06 17:55:23', 'updated_at' => '2023-03-06 17:55:23'],
            ['id' => '8', 'title' => 'Boost your business growth with WhatsApp Quality Based Messaging', 'slug' => 'boost-your-business-growth-with-whatsapp-quality-based-messaging', 'type' => 'blog', 'status' => '1', 'featured' => '1', 'lang' => 'en', 'created_at' => '2023-03-06 18:50:45', 'updated_at' => '2023-03-06 18:50:45'],
            ['id' => '9', 'title' => 'Click to Chat ads on WhatsApp- A vital tool for your marketing arsenal', 'slug' => 'click-to-chat-ads-on-whatsapp-a-vital-tool-for-your-marketing-arsenal', 'type' => 'blog', 'status' => '1', 'featured' => '1', 'lang' => 'en', 'created_at' => '2023-03-06 18:57:44', 'updated_at' => '2023-03-06 18:57:44'],
            ['id' => '10', 'title' => 'Why ChatGPT Cannot Replace Conversational AI Platforms?', 'slug' => 'why-chatgpt-cannot-replace-conversational-ai-platforms', 'type' => 'blog', 'status' => '1', 'featured' => '1', 'lang' => 'en', 'created_at' => '2023-03-06 19:00:52', 'updated_at' => '2023-03-06 19:00:52'],
            ['id' => '12', 'title' => 'Keith Powers', 'slug' => 'Developer', 'type' => 'testimonial', 'status' => '1', 'featured' => '1', 'lang' => '5', 'created_at' => '2023-03-06 19:23:24', 'updated_at' => '2023-03-06 19:23:24'],
            ['id' => '13', 'title' => 'Mary', 'slug' => 'Digital Marketer', 'type' => 'testimonial', 'status' => '1', 'featured' => '1', 'lang' => '5', 'created_at' => '2023-03-06 19:24:12', 'updated_at' => '2023-03-06 19:25:36'],
            ['id' => '14', 'title' => 'Clinton Ramosup', 'slug' => 'Freelancer', 'type' => 'testimonial', 'status' => '1', 'featured' => '1', 'lang' => '5', 'created_at' => '2023-03-06 19:24:59', 'updated_at' => '2023-03-06 19:25:22'],
            ['id' => '15', 'title' => 'Financial Services', 'slug' => 'financial-services', 'type' => 'faq', 'status' => '1', 'featured' => '1', 'lang' => 'en', 'created_at' => '2023-03-06 19:30:09', 'updated_at' => '2023-03-06 19:30:09'],
            ['id' => '16', 'title' => 'How it will take impact for Food & Restaurants business.', 'slug' => 'how-it-will-take-impact-for-food-restaurants-business', 'type' => 'faq', 'status' => '1', 'featured' => '1', 'lang' => 'en', 'created_at' => '2023-03-06 19:31:09', 'updated_at' => '2023-03-06 19:31:09'],
            ['id' => '17', 'title' => 'Template messaging', 'slug' => 'template-messaging', 'type' => 'feature', 'status' => '1', 'featured' => '1', 'lang' => 'en', 'created_at' => '2023-03-06 22:24:43', 'updated_at' => '2023-03-06 22:24:43'],
            ['id' => '18', 'title' => 'Actions buttons', 'slug' => 'actions-buttons', 'type' => 'feature', 'status' => '1', 'featured' => '1', 'lang' => 'en', 'created_at' => '2023-03-06 23:15:36', 'updated_at' => '2023-03-06 23:16:21'],
            ['id' => '19', 'title' => 'Auto Responder (BOT)', 'slug' => 'auto-responder-bot', 'type' => 'feature', 'status' => '1', 'featured' => '1', 'lang' => 'en', 'created_at' => '2023-03-06 23:32:24', 'updated_at' => '2023-03-07 08:35:52'],
            ['id' => '20', 'title' => 'Schedule message', 'slug' => 'schedule-message', 'type' => 'feature', 'status' => '1', 'featured' => '0', 'lang' => 'en', 'created_at' => '2023-03-07 08:02:46', 'updated_at' => '2023-03-07 08:03:07'],
            ['id' => '21', 'title' => 'Bulk message', 'slug' => 'bulk-message', 'type' => 'feature', 'status' => '1', 'featured' => '0', 'lang' => 'en', 'created_at' => '2023-03-07 08:13:22', 'updated_at' => '2023-03-07 08:13:22'],
            ['id' => '22', 'title' => 'RESET API for App', 'slug' => 'reset-api-for-app', 'type' => 'feature', 'status' => '1', 'featured' => '0', 'lang' => 'en', 'created_at' => '2023-03-07 08:22:38', 'updated_at' => '2023-03-07 08:22:38'],
            ['id' => '23', 'title' => 'Automatically sync in real time', 'slug' => 'top', 'type' => 'faq', 'status' => '1', 'featured' => '1', 'lang' => 'en', 'created_at' => '2023-04-09 19:39:14', 'updated_at' => '2023-04-09 19:39:14'],
            ['id' => '24', 'title' => 'Do I need a credit card to sign up?', 'slug' => 'top', 'type' => 'faq', 'status' => '1', 'featured' => '1', 'lang' => 'en', 'created_at' => '2023-04-09 19:39:50', 'updated_at' => '2023-04-09 19:39:50'],
            ['id' => '25', 'title' => 'Free 10 Days Trial', 'slug' => 'top', 'type' => 'faq', 'status' => '1', 'featured' => '1', 'lang' => 'en', 'created_at' => '2023-04-09 19:40:59', 'updated_at' => '2023-04-09 19:40:59'],
            ['id' => '26', 'title' => 'Terms and conditions', 'slug' => 'terms-and-conditions', 'type' => 'page', 'status' => '1', 'featured' => '1', 'lang' => 'en', 'created_at' => '2023-04-09 19:40:59', 'updated_at' => '2023-04-09 19:40:59'],
        ];

        Post::insert($posts);
    }
}
