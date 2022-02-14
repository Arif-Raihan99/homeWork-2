<?php

namespace App\classes;

class Product
{
    public $news;
    public $result = [];

    public function arif($type){
        foreach ($this->allNews() as $news){
            if ($news['category'] == $type){
                $this->result[] = $news;
            }
        }
        return $this->result;
    }

    public function allNews(){
        return [
            0 => [
                'id'          => 1,
                'category'    => 'world',
                'title'       => 'ইসরায়েলি বাহিনীর গুলিতে ফিলিস্তিনি কিশোর নিহত',
                'description' => 'ইসরায়েলি বাহিনীর গুলিতে এক ফিলিস্তিনি কিশোর নিহত হয়েছে। আজ সোমবার ফিলিস্তিনের পশ্চিম তীরে এ ঘটনা ঘটে। সেখানে',
                'time'        => '২ ঘণ্টা আগে',
                'image'       => 'assets/img/israil.jpg'
            ],
            1 => [
                'id'          => 2,
                'category'    => 'world',
                'title'       => 'পাকিস্তানে ধর্ম অবমাননার অভিযোগ তুলে পিটিয়ে হত্যা',
                'description' => 'ধর্ম অভিযোগে পাকিস্তানের একজনকে পিটিয়ে হত্যা করা হয়েছে। পুলিশ বলেছে, তিনি ১৫ বছর ধরে মানসিকভাবে ভারসাম্যহীন। ওই ব্যক্তি পবিত্র',
                'time'        => '২ ঘণ্টা আগে',
                'image'       => 'assets/img/pakistan.png'
            ],
            2 => [
                'id'          => 3,
                'category'    => 'world',
                'title'       => 'হিজাব না খুলে শিক্ষার্থীরা স্কুলে ঢুকতে পারছে না কর্ণাটকে',
                'description' => 'হিজাব নিষিদ্ধের ঘটনায় উত্তেজনা শুরুর পর কর্ণাটকে সাময়িক সময়ের জন্য শিক্ষাপ্রতিষ্ঠান বন্ধ করে দেওয়া হয়। আদালতের দ্বারস্থ হন ভুক্তভোগী',
                'time'        => '৪ ঘণ্টা আগে',
                'image'       => 'assets/img/hijab.jpg'
            ],
            3 => [
                'id'          => 4,
                'category'    => 'world',
                'title'       => 'ভারতে দলবদ্ধ ধর্ষণের পর ছাদ থেকে ফেলে দেওয়া হল নারীকে',
                'description' => 'পুলিশ জানায়, নারীকে কাজ দেওয়ার কথা বলে চার যুবক ডেকে নিয়ে ধর্ষণ করে। নারীকে নেশাদ্রব্য খাইয়ে তাঁর হাত-পা বেঁধে ফেলে তারা।',
                'time'        => '৬ ঘণ্টা আগে',
                'image'       => 'assets/img/india.jpg'
            ],
            4 => [
                'id'          => 5,
                'category'    => 'bd',
                'title'       => 'শিক্ষককে চুরি হওয়া সোনা উদ্ধার করে দিলেন ডিএমপি কমিশনার',
                'description' => 'অধ্যাপক জাহানারা বেগম ঢাকা মহানগর পুলিশ (ডিএমপি) কমিশনার মো. শফিকুল ইসলামের শিক্ষক ছিলেন। চুরির পর তিনি কমিশনারকে',
                'time'        => '১৭ মিনিট আগে',
                'image'       => 'assets/img/gold.jpg'
            ],
            5 => [
                'id'          => 6,
                'category'    => 'bd',
                'title'       => 'অভিযোগ: যাঁকে খুশি তাঁকে উপাচার্য নিয়োগ দেওয়া হচ্ছে',
                'description' => 'সাবেক ছাত্রনেতা মিন্টু আনোয়ার বলেন, ‘দেশের স্বাধীনতা আন্দোলনের পেছনে ছিল গণতান্ত্রিক অধিকারের আকাঙ্ক্ষা। আমাদের নব্বইয়ের',
                'time'        => '২৮ মিনিট আগে',
                'image'       => 'assets/img/lig.jpg'
            ],
            6 => [
                'id'          => 7,
                'category'    => 'bd',
                'title'       => '‘ফুল ক্যা বাবা, হামাক ভিক্ষে দ্যাও’',
                'description' => 'সবাই ভালোবাসা দিবস মানে কেবল প্রেমিক-প্রেমিকার ভালোবাসা বোঝেন। মানুষের গতানুগতিক ধারণা পাল্টে দিতে তাঁদের এই প্রয়াস, বলেন সংগঠনটির গাইবান্ধার সমন্বয়ক মেহেদী হাসান।',
                'time'        => '৪৪ মিনিট আগে',
                'image'       => 'assets/img/flower.jfif'
            ],
            7 => [
                'id'          => 8,
                'category'    => 'bd',
                'title'       => 'মোটরসাইকেল আরোহীর কোমরের বেল্টে ছিল ৪ কেজি সোনা',
                'description' => 'যশোরের বেনাপোল সীমান্ত এলাকা থেকে ৩ কেজি ৮৯১ গ্রাম ওজনের ২০টি সোনার বার উদ্ধার করা হয়েছে। উদ্ধার করা সোনার মূল্য ২ কোটি ৪',
                'time'        => '২ ঘণ্টা আগে',
                'image'       => 'assets/img/gold.jpg'
            ],
            8 => [
                'id'          => 9,
                'category'    => 'business',
                'title'       => 'নির্দেশনা জারি কেন্দ্রীয় ব্যাংকের চেকের বিপরীতে ঋণ ছাড় নয়',
                'description' => 'কোনো কোনো আর্থিক প্রতিষ্ঠান ঋণের টাকা ছাড় করাতে বাংলাদেশ ব্যাংকের চেক ব্যবহার করছে। এর মাধ্যমে বাংলাদেশ ব্যাংকে রক্ষিত ওই আর্থিক',
                'time'        => '২ ঘণ্টা আগে',
                'image'       => 'assets/img/bank.jpeg'
            ],
            9 => [
                'id'          => 10,
                'category'    => 'business',
                'title'       => 'ফুলের ব্যবসা যশোরের কৃষক হাসে ফুল চাষে',
                'description' => 'ফুলচাষি হযরত আলী ৭৫০টি গোলাপ ফুল নিয়ে যশোরের ঝিকরগাছা উপজেলার গদখালী পাইকারি ফুলের মোকামে যান। সকাল আটটার',
                'time'        => '৩ ঘণ্টা আগে',
                'image'       => 'assets/img/rose.png'
            ],
            10 => [
                'id'          => 11,
                'category'    => 'business',
                'title'       => 'সারের মূল্যবৃদ্ধি নিয়ে সরকার উভয়সংকটে: কৃষিমন্ত্রী',
                'description' => 'আব্দুর রাজ্জাক আরও বলেন, পৃথিবীর কোথাও এত ভর্তুকি দেওয়ার উদাহরণ নেই। বছরে ২৮ হাজার কোটি টাকা ভর্তুকি দিয়ে আরেকটি পদ্মা',
                'time'        => '৪ ঘণ্টা আগে',
                'image'       => 'assets/img/agricul.jpg'
            ],
            11 => [
                'id'          => 12,
                'category'    => 'business',
                'title'       => 'প্রাইজবন্ড দুই বছরের মধ্যে না নিলে পুরস্কারের টাকা তামাদি',
                'description' => 'সমাজের বড় একটা অংশই ভাগ্যে বিশ্বাস করে। ভাগ্যের ওপর আস্থাশীল মানুষের জন্যই দেশে প্রাইজবন্ড আকারে একটা সঞ্চয় কর্মসূচি চালু',
                'time'        => '৫ ঘণ্টা আগে',
                'image'       => 'assets/img/tk.png'
            ],
        ];
    }
}