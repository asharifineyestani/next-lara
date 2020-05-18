<?php

namespace App\Http\Controllers;

use Corcel\Model\Post;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function welcome()
    {
        $features = [
            "heading" => [
                "h1" => "خدمات افرانکست",
//               "description" =>"ایده های جدید دنیا های جدید رو کشف می کنند",
                "position" => "center"
            ],

            "items" => [
                [
                    "title" => " UI / UX طراحی",
                    "image" => "/assets/images/features/1-1.png",
                    "url" => "design",
                ],
                [
                    "title" => "ماشین لرنینگ و هوش مصنوعی",
                    "image" => "/assets/images/features/1-3.png",
                    "url" => "machine-learning",
                ],
                [
                    "title" => "توسعه موبایل اپلیکیشن",
                    "image" => "/assets/images/features/1-2.png",
                    "url" => "mobile-development",
                ],
            ]

        ];

        $hero = [
            "heading" => [
                "h1" => "با یه ایده دنیاتو بساز",
                "subTitle" => "ایده های جدید دنیا های جدید رو کشف می کنند",
            ],
        ];


        $blog = [
            "heading" => [
                "h1" => "وبلاگ افرانکست",
                "description" => "اخبار و مقالات آموزشی هاست و سرور در وبلاگ افرانکست",
                "position" => "center"
            ],

            "items" => Post::status('publish')
                ->where('post_type', 'post')
                ->limit(3)
                ->get()

        ];


        return view('pages.welcome')->with([
            'features' => $features,
            'hero' => $hero,
            'blog' => $blog,

        ]);
    }

    public function design()
    {
        $hero = [
            "heading" => [
                "h1" => "طراحی UI / UX",
                "subTitle" => "برای مشتریان خود بهترین ها را بخواهید تا به محصول و خدماتِ شما وفادار بمانند.",
                "description" => "باور قلبی ما این است که طراحی اصولی یک محصول در جهت وفادار ماندن مشتریان آن بسیار مهم است. ما خلاقیت و تجربه خود را با هم ترکیب می کنیم تا به بهترین روش برای تحت تاثیر قرار دادن مشتریانتان دست پیدا کنید. برای آن ها بهترین ها را بخواهید تا عاشق محصول و خدمات شما شوند. در جهانِ مدرن این تنها راه برای تداوم کسب و کارتان است.",
            ],
        ];

        $story = [
            "heading" => [
                "title" => "فرآیند طراحی در افرانِکست چگونه است؟",
                "position" => "center",
            ],
            "items" => [
                [
                    "heading" =>
                        [
                            "title" => "هماهنگی و همفکری",
                            "description" => "این مرحله یک مرحله مهم برای به دست آوردن بینش در مورد چالشی است که ما با آن روبرو هستیم. تیم طراحی از ابتدا با بخش های دیگر در تعامل است تا از طریق تجزیه, تحلیل و تعامل به راه حل های عملی دست پیدا کند. این به ما کمک می کند فرض های احتمالی را کنار بگذاریم و دقیقا مشخص کنیم که باید به چه اهدافی برسیم.",

                        ],
                    "image" => "/assets/images/story/design-1.jpg",
                ],
                [
                    "heading" =>
                        [
                            "title" => "شناسایی چالش ها",
                            "description" => "پس از تحقیق و جمع آوری اطلاعات مورد نیاز, سعی بر این است تا چالش های اصلی را شناسایی کنیم. در این مرحله نیاز است تا شما به عنوان صاحب پروژه با تیم ما در تعامل بوده و دیدگاه و نیاز های خود را با ما در میان بگذارید این کمک می کند تا همیشه نزدیک به هدف بمانیم. و به طراحان ما برای رسیدن به بهترین ویژگی ها و کارکردهای مناسب در جهت رونق کسب و کار شما کمک خواهد شد.",

                        ],
                    "image" => "/assets/images/story/design-2.jpg",
                ],
                [
                    "heading" =>
                        [
                            "title" => "جستجوی راهکار",
                            "description" => "ما در این مرحله بهترین راه حل ها را برای  چالش های شناسایی شده پیدا می کنیم. ما بازار را تحلیل می کنیم ، رقیبان ضعیف و قوی را آنالیز می کنیم ، و نیازهای مخاطبان پروژه را مشخص می کنیم. این به ما کمک می کند تا در آینده ضعف ها و احتمال شکست را کاهش دهیم و طراحی پروژه را در نزدیکترین حالت به موفقیت پیش ببریم.",

                        ],
                    "image" => "/assets/images/story/design-3.jpg",
                ],

                [
                    "heading" =>
                        [
                            "title" => "طراحیِ نمونه اولیه",
                            "description" => "به محض اینکه جنبه های بصری کار مشخص شد، ما به قسمت فنی طراحی می پردازیم. در این مرحله ما تیم توسعه خود را نیز درگیر محصول می کنیم و کارآمدترین راه های اجرای آن را در پروژه شما پیدا می کنیم. این بدان معنی است که ما علاوه بر طراحی هترین راه اجرای آن را به صورت عملی ارائه می دهیم.",

                        ],
                    "image" => "/assets/images/story/design-4.jpg",
                ],

                [
                    "heading" =>
                        [
                            "title" => "تست و پیاده سازی",
                            "description" => "پس از حصول توافق همه ی واحد های درگیر، روند توسعه شروع می شود. از ابتدای کار همزمان تست های لازم انجام می شود تا مطمئن شویم محصول معیارها و الزامات را برآورده می کند. قبل از راه اندازی ، ما یک آزمایش دیگر انجام می دهیم تا اطمینان حاصل شود که کاربر نهایی در هنگام استفاده از محصولِ شما با تجربه ای دلپذیر روبرو می شود.",

                        ],
                    "image" => "/assets/images/story/design-5.jpg",
                ],

            ]
        ];


        $feature = [
            "heading" => [
                "title" => "ارزش های پیشنهادی",
                "position" => "center",
            ],
            "items" => [
                [
                    "title" => " برند سازی",
                    "image" => "/assets/images/features/clock.png",
                    "url" => "design",
                    "description" => "ما خدمات برندسازی و باز سازی برند را به مشتریان خود ارائه می دهیم. ما دیدگاه شما را نسبت به نام تجاری بیان می کنیم - از ایده ساده گرفته تا یک برند قابل تشخیص. تیم متخصصین ما تحقیقات بازار را برای ایجاد مناسب ترین استراتژی برند برای محصول شما انجام می دهند. ما محصولاتی را توسعه می دهیم و مارک های مختلفی ایجاد می کنیم.",
                ],
                [
                    "title" => "طراحی UI / UX",
                    "image" => "/assets/images/features/responsive.png",
                    "url" => "web-development",
                    "description" => "ما از مجموعه ای از ابزارهایی استفاده می کنیم که به ما کمک می کند تا رابط توجه بیشتری را به خود جلب کند و در عین حال ساده ، پیمایش و شهودی باشد. ما در مورد راه حل های استاندارد نیستیم ، هدف ما این است که معنای جدیدی به محصول دیجیتالی شما بیفزاییم و کاربران را دوست داشته باشیم.",
                ],
                [
                    "title" => "تصویر سازی",
                    "image" => "/assets/images/features/speed.png",
                    "url" => "mobile-development",
                    "description" => "اجرای فناوری blockchain در فرآیند توسعه ما به ما کمک می کند تا راه حلهای بسیار قوی و سفارشی برای مشاغل ارائه دهیم. با رویکرد جدید مهندسی ، تیم متخصصین برجسته ما تجارت شما را به سطح بعدی می رسانند.",
                ],
            ]

        ];


        $manager = [
            "heading" => [
                "title" => "با مدیر طراحی افرانکست آشنا بشید",
                "description" => "یک مدیر کارآمد پیش شرطِ موفقیت یک کار تیمیه",
                "position" => "center"
            ],
            "items" => [
                "image" => "/assets/images/team/maryam.jpg",
                "title" => "با مدیر دپارتمان طراحیي افرانکست آشنا بشید",
                "description" => "یک مدیر کارآمد پیش شرطِ موفقیت یک کار تیمیه",
                "name" => "مریم شریفی نیستانی",
                "role" => "مدیر دپارتمان طراحی",
                "bio" => "مریم کارشناسی ارشد خود در رشته گرافیک را از دانشگاه ممفیس اخذ کرده است. او تجربه تدریس شاخه های مختلف گرافیک و همکاری با تیم های مجرب و کار در شرکت های بین المللی را در کارنامه خود دارد.  ."
            ]
        ];


        $call = [
            "heading" => [
                "title" => "قصد دارید کسب و کارتون رو رونق بدید؟",
                "description" => "بیاید در موردش یه گپ دوستانه بزنیم",
                "position" => "center",
                "subTitle" => null,

            ],
            "items" => [
                "href" => "/contact-us",
                "text" => "با ما تماس بگیرید",

            ]
        ];

        return view('pages.design')->with([
            'hero' => $hero,
            'story' => $story,
            'feature' => $feature,
            'manager' => $manager,
            'call' => $call,
        ]);

    }

    public function machineLearning()
    {

        $hero = [
            "heading" => [
                "h1" => "هوش مصنوعی و ماشین لرنینگ",
                "subTitle" => "برای توسعه ی کسب و کار خود از هوش مصنوعی و مدلهای یادگیری ماشین که راه حلهای پیچیده ای را برای نیازهای شغلی شما به ارمغان می آورد، بهره ببرید.",
                "title" => null,
                "description" => "از هوش مصنوعی در جهت افزایش و ارتقاء تجربه مشتری و تقویت فرآیند و بهره وری عملیاتی به روشی نوآورانه ، مؤثر و مطمئن بهره ببرید. پژوهشگران ما دانش و مهارت اساسی در طراحی ، اجرای و یکپارچه سازی راه حل های هوش مصنوعی خاص برای خواسته های صنعت شما دارند.",
                "position" => null,
                "className" => "",
                "label" => "",
            ],
            "items" => [
                "image" => "/assets/images/team/maryam.jpg",
                "title" => "با مدیر دپارتمان طراحیي افرانکست آشنا بشید",
                "description" => "یک مدیر کارآمد پیش شرطِ موفقیت یک کار تیمیه",
                "name" => "مریم شریفی نیستانی",
                "role" => "مدیر دپارتمان طراحی",
                "bio" => "مریم کارشناسی ارشد خود در رشته گرافیک را از دانشگاه ممفیس اخذ کرده است. او تجربه تدریس شاخه های مختلف گرافیک و همکاری با تیم های مجرب و کار در شرکت های بین المللی را در کارنامه خود دارد.  ."
            ]
        ];

        $feature = [
            "heading" => [
                "title" => "پیشنهاد افرانکست",
                "position" => "center",
            ],
            "items" => [
                [
                    "title" => "راه حل های تصمیم گیری",
                    "image" => "/assets/images/features/clock.png",
                    "url" => "design",
                    "body" => "تصمیم گیری هرگز ساده نبوده است. تصمیمات تجاری را با در نظر گرفتن راه حل های هوش مصنوعی خودکار کنید. سیستم الگوریتمی و پیش بینی نوآورانه به یافتن و انتخاب مناسب ترین تصمیمات کمک می کند.",
                ],
                [
                    "title" => "مدلسازی پیش بینانه",
                    "image" => "/assets/images/features/responsive.png",
                    "url" => "web-development",
                    "body" => "راه حل های مدلسازی پیش بینانه به شما کمک می کند تا چرخه زندگی مشتری را ارزیابی کنید ، استراتژی های بازاریابی سودمندترین را پیدا کنید ، ایجاد قیمت گذاری محصول را در نظر بگیرید و خدمات بهتری به مشتری ارائه دهند.",
                ],
                [
                    "title" => "ربات های پشتیبان",
                    "image" => "/assets/images/features/speed.png",
                    "url" => "mobile-development",
                    "body" => "پشتیبانی درخشان و همچنین تجربه عالی مشتری ، اکنون با گپ های مهم و عامل های مجازی مبتنی بر هوش مصنوعی ، که مکالمات مشتری و متنی را ارائه می دهند ، امکان پذیر است.",
                ],
                [
                    "title" => "بینایی رایانه",
                    "image" => "/assets/images/features/speed.png",
                    "url" => "mobile-development",
                    "body" => "هوش مصنوعی به رایانه ها این امکان را می دهد که تصاویر را به همان روشی که انسان شناسایی و پردازش می کند ، انجام دهند. با استفاده از Computer Vision سیستم های مصنوعی قادر به دستیابی به داده های مرکب و ارائه سطح بالایی از اطلاعات هستند.",
                ],
            ]
        ];

        $story = [
            "heading" => [
                "title" => "فرآیند توسعه هوش مصنوعی چگونه است؟",
                "position" => "center",
            ],
            "image" => "assets/images/story/design-process.png",
            "items" => [
                [
                    "heading" =>
                        [
                            "title" => "اکتساب داده",
                            "description" => "ما کسب و کار شما را تجزیه و تحلیل می کنیم تا دریابیم که چه مدل AI متناسب با نیاز شرکت شما خواهد بود. ما تحقیقات مفصلی انجام می دهیم تا بتوانیم چگونگی حل مسائل فعلی ، بهبود عملکرد شرکت و افزایش سود شما را توضیح دهیم.",

                        ],
                    "image" => "assets/images/story/data-1.jpg",
                ],
                [
                    "heading" =>
                        [
                            "title" => "آمایش داده ها",
                            "description" => "پس از دستیابی به اطلاعات ، شروع به کار در تبدیل داده ها می کنیم تا از الگوریتم های AI استفاده کنیم. هوش مصنوعی می تواند اطلاعات را مطالعه کند ، از آن درس بگیرد ، تصمیم بگیرد و بر اساس تجربه خود عمل کند.",

                        ],
                    "image" => "assets/images/story/data-2.jpg",
                ],
                [
                    "heading" =>
                        [
                            "title" => "فرضیه و مدل سازی",
                            "description" => "برای اینکه دریابیم چه نوع الگوی یادگیری ماشینی بهترین کار را با تجارت شما انجام می دهد ، داده های استفاده شده در مرحله قبلی را برای آموزش تبدیل می کنیم و آن را با ویژگی های اضافی آزمایش می کنیم.",

                        ],
                    "image" => "assets/images/story/data-3.jpg",
                ],

                [
                    "heading" =>
                        [
                            "title" => "ارزیابی و تفسیر",
                            "description" => "ما مؤثرترین الگوریتم یادگیری ماشین را انتخاب می کنیم و یک مدل هوش مصنوعی سفارشی برای مهندسی ایجاد می کنیم که متناسب با نیازهای تجاری شرکت شما باشد.",

                        ],
                    "image" => "assets/images/story/data-4.jpg",
                ],

                [
                    "heading" =>
                        [
                            "title" => "توسعه",
                            "description" => "ما مدل هوش مصنوعی انتخابی را با سیستم و کلیه فرایندهای موجود در تجارت خود ادغام می کنیم.",

                        ],
                    "image" => "assets/images/story/data-5.jpg",
                ],

                [
                    "heading" =>
                        [
                            "title" => "بهینه سازی",
                            "description" => "در مرحله آخر ، مدل یادگیری ماشین را در کار بررسی می کنیم و در صورت لزوم پیشرفت می کنیم.",

                        ],
                    "image" => "assets/images/story/data-5.jpg",
                ],

            ]
        ];

        $feature2 = [
            "heading" => [
                "title" => "پیشنهاد افرانکست",
                "position" => "center",
            ],
            "items" => [
                [
                    "title" => "Sales",

                    "ul" => ["Improve sales forecasting",
                        "Interpret customer data",
                        "Predict customer needs",
                        "Efficient transactional sales",
                        "Sales communication",
                    ], "image" => "/assets/images/features/sale.png",
                ],
                [
                    "title" => "Banking & Finance",

                    "ul" => [
                        "Detecting fraud",
                        "Underwriting loan/insurance",
                        "Algorithmic trading",
                        "Portfolio management",
                        "Sentiment/new analysis",
                        "Customer service",
                    ], "image" => "/assets/images/features/accounting.png",
                ],
                [
                    "title" => "Marketing",

                    "ul" => [
                        "Personalize mail campaigns",
                        "Precisely meet the customer�s requirements",
                        "Offer customized offers to customers",
                        "Analyze previous buying patterns"
                    ], "image" => "/assets/images/features/computer.png",
                ],
                [
                    "title" => "Human Resources",

                    "ul" => [
                        " Track and assess applicants",
                        " Attract relevant talent",
                        " Detect attrition",
                        " Individual skill management"
                    ], "image" => "/assets/images/features/resume.png",
                ],
            ]
        ];


        $manager = [
            "heading" => [
                "title" => "با مدیر AI افرانکست آشنا شوید",
                "description" => "یک مدیر کارآمد پیش شرطِ موفقیت یک کار تیمیه",
                "position" => "center"
            ],
            "items" => [
                "image" => "/assets/images/team/elham.png",
                "title" => "با مدیر دپارتمان AI افرانکست آشنا بشید",
                "description" => "یک مدیر کارآمد پیش شرطِ موفقیت یک کار تیمیه",
                "name" => "الهام شریفی نیستانی",
                "role" => "مدیر دپارتمان AI",
                "bio" => "الهام شریفی نیستانی دکترای خود را از دانشگاه Old Dominion و کارشناسی ارشد خود را  از دانشگاه صنعتی شریف دریافت کرده است. وی بیش از هشت سال تجربه حرفه ای در مدل سازی عددی ، تجزیه و تحلیل داده ها و برنامه نویسی دارد. تخصص های وی عبارتند از: تجزیه و تحلیل داده ها ، یادگیری ماشین و برنامه نویسی به ویژه با Matlab، R، Python و FORTRAN."
            ]
        ];

        $call = [
            "heading" => [
                "title" => "قصد دارید کسب و کارتون رو رونق بدید؟",
                "description" => "بیاید در موردش یه گپ دوستانه بزنیم",
                "position" => "center",
                "subTitle" => null,

            ],
            "items" => [
                "href" => "/contact-us",
                "text" => "با ما تماس بگیرید",

            ]
        ];

        return view('pages.machine_learning')->with([
            'hero' => $hero,
            'feature' => $feature,
            'feature2' => $feature2,
            'story' => $story,
            'manager' => $manager,
            'call' => $call,
        ]);
    }

    public function webDevelopment()
    {
        $hero = [
            "heading" => [
                "h1" => "توسعه وب اپلیکیشن",
                "subTitle" => "آیا وب سایتِ شما, انتظار مخاطبینِ بی حوصله ی امروز را برآورده می سازد؟",
                "description" => "امروزه افراد حتی تحمل ثانیه ای تعلل و کندی را ندارند. آن ها عادت کرده اند تا پاسخ نیاز های خود را در کثری از ثانیه دریافت کنند و در صورت مواجهه با کوچکترین افت کیفیتی به راحتی وبسایت شما را خواهند بست و به سراغ رقبای شما خواهند رفت. برای پاسخگویی به انسانِ بی حوصله ی امروز, تکنولوژی های مدرن زیادی ارائه شده تا وبسایت شما را سریع تر از هر زمان دیگر بارگذاری کند. افرانِکست به عنوان شركتي به روز در حوزه ی تکنولوژی های مدرن آماده است تا راه حل های خود جهت توسعه و پیاده سازیِ کاراترین و سریعترین اپلیکیشن های تحت وب را ارائه دهد.",
                "position" => null,
            ],
            "items" => [
                "image" => "/assets/images/team/maryam.jpg",
                "title" => "با مدیر دپارتمان طراحیي افرانکست آشنا بشید",
                "description" => "یک مدیر کارآمد پیش شرطِ موفقیت یک کار تیمیه",
                "name" => "مریم شریفی نیستانی",
                "role" => "مدیر دپارتمان طراحی",
                "bio" => "مریم کارشناسی ارشد خود در رشته گرافیک را از دانشگاه ممفیس اخذ کرده است. او تجربه تدریس شاخه های مختلف گرافیک و همکاری با تیم های مجرب و کار در شرکت های بین المللی را در کارنامه خود دارد.  ."
            ]
        ];

        $feature = [
            "heading" => [
                "title" => "پیشنهاد افرانکست",
                "position" => "center",
            ],
            "items" => [
                [
                    "title" => "راه حل های تصمیم گیری",
                    "image" => "/assets/images/features/clock.png",
                    "url" => "design",
                    "body" => "تصمیم گیری هرگز ساده نبوده است. تصمیمات تجاری را با در نظر گرفتن راه حل های هوش مصنوعی خودکار کنید. سیستم الگوریتمی و پیش بینی نوآورانه به یافتن و انتخاب مناسب ترین تصمیمات کمک می کند.",
                ],
                [
                    "title" => "مدلسازی پیش بینانه",
                    "image" => "/assets/images/features/responsive.png",
                    "url" => "web-development",
                    "body" => "راه حل های مدلسازی پیش بینانه به شما کمک می کند تا چرخه زندگی مشتری را ارزیابی کنید ، استراتژی های بازاریابی سودمندترین را پیدا کنید ، ایجاد قیمت گذاری محصول را در نظر بگیرید و خدمات بهتری به مشتری ارائه دهند.",
                ],
                [
                    "title" => "ربات های پشتیبان",
                    "image" => "/assets/images/features/speed.png",
                    "url" => "mobile-development",
                    "body" => "پشتیبانی درخشان و همچنین تجربه عالی مشتری ، اکنون با گپ های مهم و عامل های مجازی مبتنی بر هوش مصنوعی ، که مکالمات مشتری و متنی را ارائه می دهند ، امکان پذیر است.",
                ],
                [
                    "title" => "بینایی رایانه",
                    "image" => "/assets/images/features/speed.png",
                    "url" => "mobile-development",
                    "body" => "هوش مصنوعی به رایانه ها این امکان را می دهد که تصاویر را به همان روشی که انسان شناسایی و پردازش می کند ، انجام دهند. با استفاده از Computer Vision سیستم های مصنوعی قادر به دستیابی به داده های مرکب و ارائه سطح بالایی از اطلاعات هستند.",
                ],
            ]
        ];

        $story = [
            "heading" => [
                "title" => "فرآیند توسعه هوش مصنوعی چگونه است؟",
                "position" => "center",
            ],
            "image" => "assets/images/story/design-process.png",
            "items" => [
                [
                    "heading" =>
                        [
                            "title" => "اکتساب داده",
                            "description" => "ما کسب و کار شما را تجزیه و تحلیل می کنیم تا دریابیم که چه مدل AI متناسب با نیاز شرکت شما خواهد بود. ما تحقیقات مفصلی انجام می دهیم تا بتوانیم چگونگی حل مسائل فعلی ، بهبود عملکرد شرکت و افزایش سود شما را توضیح دهیم.",

                        ],
                    "image" => "assets/images/story/data-1.jpg",
                ],
                [
                    "heading" =>
                        [
                            "title" => "آمایش داده ها",
                            "description" => "پس از دستیابی به اطلاعات ، شروع به کار در تبدیل داده ها می کنیم تا از الگوریتم های AI استفاده کنیم. هوش مصنوعی می تواند اطلاعات را مطالعه کند ، از آن درس بگیرد ، تصمیم بگیرد و بر اساس تجربه خود عمل کند.",

                        ],
                    "image" => "assets/images/story/data-2.jpg",
                ],
                [
                    "heading" =>
                        [
                            "title" => "فرضیه و مدل سازی",
                            "description" => "برای اینکه دریابیم چه نوع الگوی یادگیری ماشینی بهترین کار را با تجارت شما انجام می دهد ، داده های استفاده شده در مرحله قبلی را برای آموزش تبدیل می کنیم و آن را با ویژگی های اضافی آزمایش می کنیم.",

                        ],
                    "image" => "assets/images/story/data-3.jpg",
                ],

                [
                    "heading" =>
                        [
                            "title" => "ارزیابی و تفسیر",
                            "description" => "ما مؤثرترین الگوریتم یادگیری ماشین را انتخاب می کنیم و یک مدل هوش مصنوعی سفارشی برای مهندسی ایجاد می کنیم که متناسب با نیازهای تجاری شرکت شما باشد.",

                        ],
                    "image" => "assets/images/story/data-4.jpg",
                ],

                [
                    "heading" =>
                        [
                            "title" => "توسعه",
                            "description" => "ما مدل هوش مصنوعی انتخابی را با سیستم و کلیه فرایندهای موجود در تجارت خود ادغام می کنیم.",

                        ],
                    "image" => "assets/images/story/data-5.jpg",
                ],

                [
                    "heading" =>
                        [
                            "title" => "بهینه سازی",
                            "description" => "در مرحله آخر ، مدل یادگیری ماشین را در کار بررسی می کنیم و در صورت لزوم پیشرفت می کنیم.",

                        ],
                    "image" => "assets/images/story/data-5.jpg",
                ],

            ]
        ];

        $feature2 = [
            "heading" => [
                "title" => "پیشنهاد افرانکست",
                "position" => "center",
            ],
            "items" => [
                [
                    "title" => "Sales",

                    "ul" => ["Improve sales forecasting",
                        "Interpret customer data",
                        "Predict customer needs",
                        "Efficient transactional sales",
                        "Sales communication",
                    ], "image" => "/assets/images/features/sale.png",
                ],
                [
                    "title" => "Banking & Finance",

                    "ul" => [
                        "Detecting fraud",
                        "Underwriting loan/insurance",
                        "Algorithmic trading",
                        "Portfolio management",
                        "Sentiment/new analysis",
                        "Customer service",
                    ], "image" => "/assets/images/features/accounting.png",
                ],
                [
                    "title" => "Marketing",

                    "ul" => [
                        "Personalize mail campaigns",
                        "Precisely meet the customer�s requirements",
                        "Offer customized offers to customers",
                        "Analyze previous buying patterns"
                    ], "image" => "/assets/images/features/computer.png",
                ],
                [
                    "title" => "Human Resources",

                    "ul" => [
                        " Track and assess applicants",
                        " Attract relevant talent",
                        " Detect attrition",
                        " Individual skill management"
                    ], "image" => "/assets/images/features/resume.png",
                ],
            ]
        ];


        $manager = [
            "heading" => [
                "title" => "با مدیر AI افرانکست آشنا شوید",
                "description" => "یک مدیر کارآمد پیش شرطِ موفقیت یک کار تیمیه",
                "position" => "center"
            ],
            "items" => [
                "image" => "/assets/images/team/elham.png",
                "title" => "با مدیر دپارتمان AI افرانکست آشنا بشید",
                "description" => "یک مدیر کارآمد پیش شرطِ موفقیت یک کار تیمیه",
                "name" => "الهام شریفی نیستانی",
                "role" => "مدیر دپارتمان AI",
                "bio" => "الهام شریفی نیستانی دکترای خود را از دانشگاه Old Dominion و کارشناسی ارشد خود را  از دانشگاه صنعتی شریف دریافت کرده است. وی بیش از هشت سال تجربه حرفه ای در مدل سازی عددی ، تجزیه و تحلیل داده ها و برنامه نویسی دارد. تخصص های وی عبارتند از: تجزیه و تحلیل داده ها ، یادگیری ماشین و برنامه نویسی به ویژه با Matlab، R، Python و FORTRAN."
            ]
        ];

        $call = [
            "heading" => [
                "title" => "قصد دارید کسب و کارتون رو رونق بدید؟",
                "description" => "بیاید در موردش یه گپ دوستانه بزنیم",
                "position" => "center",
                "subTitle" => null,

            ],
            "items" => [
                "href" => "/contact-us",
                "text" => "با ما تماس بگیرید",

            ]
        ];


        return view('pages.web_development')->with([
            'hero' => $hero,
            'feature' => $feature,
            'feature2' => $feature2,
            'story' => $story,
            'manager' => $manager,
            'call' => $call,
        ]);
    }

    public function mobileDevelopment()
    {
        return view('pages.mobile_development')->with([

        ]);
    }

    public function login()
    {
        $heading = [
            "h1" => "ورود",
//           "subTitle" =>"اطلاعات تماس خود را وارد نمایید تا در اسرع وقت با شما تماس بگیریم",

            "position" => "center"
        ];


        return view('pages.login', compact('heading'));

    }

    public function service()
    {
        $service = [
            "heading" => [
                "h1" => "خدمات",
                "position" => "center"
            ],
            "items" => [
                [
                    "title" => "طراحی UI / UX",
                    "description" => "جلوه ای دلپذیر با هدف ارتقای کسب و کارتان را در طراحی و برندینگ شما پیاده خواهیم کرد. طرحی ادراکی , ساده و منحصر به فرد شایسته ی تجارت شما",
                    "image" => "/assets/images/features/1-1.png",
                    "url" => "design",
                ],

                [
                    "title" => "ماشین لرنینگ و هوش مصنوعی",
                    "description" => "برای کسب و کار خود از هوش مصنوعی و مدلهای یادگیری ماشین که راه حلهای پیچیده ای را برای نیازهای شغلی شما به ارمغان می آورد، بهره ببرید.",
                    "image" => "/assets/images/features/1-3.png",
                    "url" => "machine-learning",
                ],


                [
                    "title" => "توسعه وب اپلیکشن",
                    "description" => "ما روشهای به روز و مختلفی را برای اجرای پروژه شما در بازار رقابتی امروز می دانیم. تیم ما بالاترین کیفیت back-end و front-end را ارائه می دهد.",
                    "image" => "/assets/images/features/1-3.png",
                    "url" => "web-development",
                ],
                [
                    "title" => "توسعه موبایل اپلیکیشن",
                    "description" => "ما همراه شما خواهیم بود تا بتوانید برای مشتریان مدرن خود بهترین ارزش ها را فراهم کنید. و به کسب و کار شما کمک خواهیم کرد تا خدمات خود را در بستر اپلیکیشن های تحت موبایل به بهترین شکل ارائه دهد.",
                    "image" => "/assets/images/features/1-2.png",
                    "url" => "mobile-development",
                ],
            ]
        ];


        return view('pages.service', compact('service'));

    }

    public function contactUs()
    {

        $heading = [
            "h1" => "تماس با ما",
            "subTitle" => "اطلاعات تماس خود را وارد نمایید تا در اسرع وقت با شما تماس بگیریم",

            "position" => "center"
        ];

        return view('pages.contact_us', compact('heading'));

    }

    public function aboutUs()
    {
        $hero = [
            "heading" => [
                "h1" => "درباره ما",
                "subTitle" => "خلاق, به روز و قابل اعتماد",
                "description" => "افرانکست یک شرکت نوآورانه در حوزه تکنولوژی به ویژه تولید موبایل اپلیکیشن و ارائه راه حل هایی در بستر هوش مصنوعی است. مهم نیست چقدر ایده های شما خلاقانه است, ما به آن ها جامه عمل می پوشانیم. ما با ترکیب تخصص ها و دانش فنی تیم خود اطمینان می دهیم که تجارت شما از مزیت رقابتی و سودآوری برخوردار خواهد شد.",
            ],
        ];

        $story = [
            "heading" => [
                "title" => "پیشنهاد ما",
                "position" => "center",
            ],
            "items" => [
                [
                    "items" => [
                        [
                            "title" => "طراحی",
                            "icon" => "",
                            "body" => " ما طراحی و برندینگ ایده آل شما را ایجاد خواهیم کرد. جلوه ای دلپذیر با هدف ارتقای کسب و کارتان را در طراحی نهایی پیاده خواهیم کرد. یک طراحی ادراکی, ساده و منحصر به فرد ",

                        ],
                        [
                            "title" => "توسعه وب اپلیکیشن",
                            "icon" => "",
                            "body" => "ما روشهای به روز و مختلفی را برای اجرای پروژه شما در بازار رقابتی امروز می دانیم. تیم ما بالاترین کیفیت back-end و front-end را ارائه می دهد.",

                        ],

                        [
                            "title" => "توسعه موبایل اپلیکیشن",
                            "icon" => "",
                            "body" => "ما همراه شما خواهیم بود تا بتوانید برای مشتریان مدرن خود بهترین ارزش ها را فراهم کنید. و به کسب و کار شما کمک خواهیم کرد تا خدمات خود را در بستر اپلیکیشن های تحت موبایل به بهترین شکل ارائه دهد.  ",

                        ],
                    ],

                    "image" => "/assets/images/phones/mobile-app-4.png",
                ],
            ]
        ];


        $feature = [
            "heading" => [
                "title" => "ما که هستیم؟",
                "description" => "ما ساده ترین راه حل کسب و کار شما هستیم",
                "position" => "center",
            ],
            "items" => [
                [
                    "title" => "نوآوران الهام بخش",
                    "body" => "ما نبض جدیدترین تکنیک های توسعه ی تکنولوژی در دنیای دیجیتال را در دست داریم. ما ابزارهای به روز و متنوعی را برای در صدر ماندن و ارایه بهترین راه حل ها به مشتریان خود در اختیار داریم.",
                    "avatar" => "",
                ],
                [
                    "title" => "آرمان گرا",
                    "body" => "تیم ما تفکر خود را به هیچ چارچوبی محدود نمی کند. ما در جستجوی ایده های چالش برانگیز هستیم تا نشان دهیم چگونه غیرممکن ها امکان پذیر و حتی واقعی خواهند شد.",
                    "avatar" => "",
                ],
                [
                    "title" => "مشتری و نتیجه محور",
                    "body" => "ما ایده ها و نیازهای شغلی شما را ارج می نهیم. بهترین راه حل ها و روش های عملی را جهت پیاده سازی آن ها از ما بخواهید. موفقیت شما بهترین پاداش برای ما است.",
                    "avatar" => "",
                ],
                [
                    "title" => "متمرکز بر روی فن آوری",
                    "body" => "ابزارهای پیشرفته و فناوری های جدید مترادف فرآیندهای تجاری موفق هستند. ما معتقدیم که ارائه فناوری های نوآورانه به تجارت شما, خدمات شما را بی نظیر ، رقابتی و سودآور می کند.", "avatar" => "",
                ],

            ]

        ];


        $manager = [
            "heading" => [
                "title" => "با مدیر طراحی افرانکست آشنا بشید",
                "description" => "یک مدیر کارآمد پیش شرطِ موفقیت یک کار تیمیه",
                "position" => "center"
            ],
            "items" => [
                "image" => "/assets/images/team/maryam.jpg",
                "title" => "با مدیر دپارتمان طراحیي افرانکست آشنا بشید",
                "description" => "یک مدیر کارآمد پیش شرطِ موفقیت یک کار تیمیه",
                "name" => "مریم شریفی نیستانی",
                "role" => "مدیر دپارتمان طراحی",
                "bio" => "مریم کارشناسی ارشد خود در رشته گرافیک را از دانشگاه ممفیس اخذ کرده است. او تجربه تدریس شاخه های مختلف گرافیک و همکاری با تیم های مجرب و کار در شرکت های بین المللی را در کارنامه خود دارد.  ."
            ]
        ];


        $call = [
            "heading" => [
                "title" => "قصد دارید کسب و کارتون رو رونق بدید؟",
                "description" => "بیاید در موردش یه گپ دوستانه بزنیم",
                "position" => "center",
                "subTitle" => null,

            ],
            "items" => [
                "href" => "/contact-us",
                "text" => "با ما تماس بگیرید",

            ]
        ];

        return view('pages.about_us')->with([
            'hero' => $hero,
            'story' => $story,
            'feature' => $feature,
            'manager' => $manager,
            'call' => $call,
        ]);

    }
}
