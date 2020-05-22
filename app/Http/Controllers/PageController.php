<?php

namespace App\Http\Controllers;

use Corcel\Model\Post;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function welcome()
    {

        $hero = [
            "heading" => [
                "h1" => "One idea can change the world.",
                "subTitle" => "New ideas will discover new worlds.",
            ],
        ];


        $features = [
            "heading" => [
                "title" => "Services",
                "position" => "center"
            ],

            "items" => [
                [
                    "title" => " UI/UX Design",
                    "image" => "/assets/images/features/1-1.png",
                    "url" => "design",
                    "description" => "Design that suits your business",
                ],
                [
                    "title" => "AI & ML Development",
                    "image" => "/assets/images/features/1-3.png",
                    "url" => "machine-learning",
                    "description" => "Transform into an AI-driven company, using machine learning models that bring complex solutions for your business needs.",
                ],
                [
                    "title" => "Mobile App development",
                    "image" => "/assets/images/features/1-2.png",
                    "url" => "mobile-development",
                    "description" => "Let’s go Mobile world. Impactful custom app development it is about us.",
                ],
                [
                    "title" => "Web App development",
                    "image" => "/assets/images/features/1-2.png",
                    "url" => "web-development",
                    "description" => "Future Web Platform",
                ],
            ]

        ];


        $blog = [
            "heading" => [
                "title" => "Blog",
                "description" => "News and educational articles and programing on the Afracode blog",
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
                "h1" => "UI/UX Design",
                "subTitle" => "Design that suits your business",
                "description" => "Meet the greatest design solution for your product. We strongly believe that perfect design is key to customer loyalty. We combine our creativity and experience to find the best way how to impress your customers and make them love your product.",
            ],
        ];

        $story = [
            "heading" => [
                "title" => "How does the design process look like",
                "position" => "center",
            ],
            "items" => [
                [
                    "heading" =>
                        [
                            "title" => "Empathise",
                            "description" => "It is an important stage to gain insights about the challenge we are faced with. We involve the best experts to find out all concerns through analysis, engaging and emphasizing with people. It helps us to set aside any possible assumptions and define which goals should we achieve.",

                        ],
                    "image" => "/assets/images/story/design-1.jpg",
                ],
                [
                    "heading" =>
                        [
                            "title" => "Define the problem",
                            "description" => "After our research, we collect all information and identify core problems. This stage requires you to share your vision and goal with us. It helps us to stay on the same page with you and it's easier for our designers to create right features and functions to boost your business and solve the issue.",

                        ],
                    "image" => "/assets/images/story/design-2.jpg",
                ],
                [
                    "heading" =>
                        [
                            "title" => "Ideate",
                            "description" => "We create as many ideas for problem solutions as possible at the beginning of the Ideation phase. We analyze the market, learn competitors weak and strong sides, determine the target audience needs. It helps us to reduce looses and fails in future.",

                        ],
                    "image" => "/assets/images/story/design-3.jpg",
                ],

                [
                    "heading" =>
                        [
                            "title" => "Prototype",
                            "description" => "As soon as a visual aspect is clear, we proceed to a technical part of design. At this stage we engage in product our development team and find out the most efficient ways of implementing it in your project. It means that we create not only design, we know the best way how to perform it into real.",

                        ],
                    "image" => "/assets/images/story/design-4.jpg",
                ],

                [
                    "heading" =>
                        [
                            "title" => "Test",
                            "description" => "Since all designs are agreed, we start the development process. From day one we do testing to make sure that the product meets criteria and requirements. Before the launch we make one more testing to ensure that the final user will get only a pleasant experience using your product",

                        ],
                    "image" => "/assets/images/story/design-5.jpg",
                ],

            ]
        ];


        $feature = [
            "heading" => [
                "title" => "Features",
                "position" => "center",
            ],
            "items" => [
                [
                    "title" => "Branding",
                    "image" => "/assets/images/features/clock.png",
                    "url" => "design",
                    "description" => "We provide our clients with branding and rebranding services. We express your vision of the brand – from simple idea until a recognizable brand. Our team of experts makes market research to develop the most suitable brand strategy for your product. We develop products and create brands that differ.",
                ],
                [
                    "title" => "UI/UX",
                    "image" => "/assets/images/features/responsive.png",
                    "url" => "web-development",
                    "description" => "We use a bunch of tools that help us to make interface catch more attention and at the same time be simple, navigating and intuitive. We are not about standard solutions, we aim to add new meaning to your digital product and make users love it.",
                ],
                [
                    "title" => "Animation Illustration",
                    "image" => "/assets/images/features/speed.png",
                    "url" => "mobile-development",
                    "description" => "Implementing blockchain technology to our development process help us to offer highly robust and customized solutions to businesses. With a new engineering approach our team of outstanding experts will take your business to the next level.",
                ],
            ]

        ];


        $manager = [
            "heading" => [
                "title" => "Meet the Afracode Design Manager",
                "description" => "An efficient manager is a prerequisite for the success of a team",
                "position" => "center"
            ],
            "items" => [
                "image" => "/assets/images/team/maryam.jpg",
                "title" => "Meet the director of the Afracode design department",
                "description" => "An efficient manager is a prerequisite for the success of a team",
                "name" => "Maryam Sharifineyestani",
                "role" => "Art director",
                "bio" => "An efficient manager is a prerequisite for the success of a team..."
            ]
        ];


        $call = [
            "heading" => [
                "title" => "Have a project?",
                "description" => " Let’s make it together!",
                "position" => "center",
                "subTitle" => null,

            ],
            "items" => [
                "href" => "/contact-us",
                "text" => "Contact Us",

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
                "h1" => "Artificial intelligence & Machine learning",
                "subTitle" => "Transform into an AI-driven company, using machine learning models that bring complex solutions for your business needs.",
                "title" => null,
                "description" => "We use machine intelligence to increase and enhance customer experience and boost process and operational productivity in an innovative, effective, and trustful way. Our team of scientists has fundamental knowledge and expertise in designing, implementing and integrating artificial intelligence solutions specific to your industry demands.",
                "position" => null,
                "className" => "",
                "label" => "",
            ]
        ];

        $feature = [
            "heading" => [
                "title" => "We offer",
                "position" => "center",
            ],
            "items" => [
                [
                    "title" => "Decision-Making Solution",
                    "image" => "/assets/images/features/clock.png",
                    "url" => "design",
                    "body" => "Decision making has never been so simple. Automate business decisions with our AI-powered Decision-Making Solution. Innovative algorithmic and predictive system helps to find and choose the most suitable decisions.",
                ],
                [
                    "title" => "Predictive Modeling",
                    "image" => "/assets/images/features/responsive.png",
                    "url" => "web-development",
                    "body" => "Our Predictive Modeling solution helps businesses evaluate customer lifecycle, find more advantageous marketing strategies, consider product pricing creation, and provide better customer service.",
                ],
                [
                    "title" => "Chat bots",
                    "image" => "/assets/images/features/speed.png",
                    "url" => "mobile-development",
                    "body" => "Brilliant support, as well as great customer experience, now is possible with our top-notch AI-driven chatbots and virtual agents, which provide contextual and personalized customer conversations.",
                ],
                [
                    "title" => "Computer vision",
                    "image" => "/assets/images/features/speed.png",
                    "url" => "mobile-development",
                    "body" => "Our Computer vision empowers machines to identify and process pictures in the same way as a human does. With Computer Vision artificial systems are able to access compound data and provide a high level of information.",
                ],
            ]
        ];

        $story = [
            "heading" => [
                "title" => "How does development process look like?",
                "position" => "center",
            ],
            "image" => "assets/images/story/design-process.png",
            "items" => [
                [
                    "heading" =>
                        [
                            "title" => "Data Acquisition",
                            "description" => "We analyze your business to find out what AI model will suit your company needs. We do detailed research to define how we can solve current issues, improve company performance and boost your profit.",

                        ],
                    "image" => "assets/images/story/data-1.jpg",
                ],
                [
                    "heading" =>
                        [
                            "title" => "Data Preparation",
                            "description" => "After data acquisition we start to work on data transformation to use it with AI algorithms. AI can study information, learn from it, make decisions and act based on its experience.",

                        ],
                    "image" => "assets/images/story/data-2.jpg",
                ],
                [
                    "heading" =>
                        [
                            "title" => "Hypothesis & Modeling",
                            "description" => "To find out what type of machine learning model will work the best with your business, we transform data used on the previous phase for the training and testing it with extra features.",

                        ],
                    "image" => "assets/images/story/data-3.jpg",
                ],

                [
                    "heading" =>
                        [
                            "title" => "Evaluation & Interpretation",
                            "description" => "We choose the most effective machine learning algorithm and create a custom AI model for the engineering which fit all business needs of your enterprise.",

                        ],
                    "image" => "assets/images/story/data-4.jpg",
                ],

                [
                    "heading" =>
                        [
                            "title" => "Deployment",
                            "description" => "We integrate the chosen AI model to the system and all processes in your business.",

                        ],
                    "image" => "assets/images/story/data-5.jpg",
                ],

                [
                    "heading" =>
                        [
                            "title" => "Optimization",
                            "description" => "In the final phase, we check the machine learning model in work and make an improvement if needed.",

                        ],
                    "image" => "assets/images/story/data-5.jpg",
                ],

            ]
        ];

        $feature2 = [
            "heading" => [
                "title" => "How ML can benefit your business?",
                "description" => "ML helps to extract important information from limitless raw data. Implemented in the right way, ML can serve as a solution to a variety of business problems, and predict complex customer behaviors. There are some areas listed below where ML can help your business be one step ahead.",
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
                "title" => "Meet the director of AI Afracode",
                "description" => "An efficient manager is a prerequisite for the success of a team",
                "position" => "center"
            ],
            "items" => [
                "image" => "/assets/images/team/elham.png",
                "title" => "Meet the director of AI Afracode",
                "description" => "An efficient manager is a prerequisite for the success of a team",
                "name" => "Elham Sharifineyestani",
                "role" => "AI Department Manager",
                "bio" => "Elham has a Ph.D.  in Engineering from Old Dominion University and a MS.c. in Engineering from sharif university of technology. She has over eight years of experience in numerical modeling, data analysis, and programming. Her specialities include: data analysis, Machine learning, and programming especially with Matlab, R, Python, and FORTRAN."
            ]
        ];

        $call = [
            "heading" => [
                "title" => "Have a project?",
                "description" => " Let’s make it together!",
                "position" => "center",
                "subTitle" => null,

            ],
            "items" => [
                "href" => "/contact-us",
                "text" => "Contact Us",

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
                "h1" => "Web Development",
                "subTitle" => "Future Web Platform",
                "description" => "Catch your dream website or web application with us! As a full-stack web development company, we offer a wide range of custom end-to end solutions that boost your business and run it on the web. We put all our efforts to create web apps, services, and sites that meet your expectations and satisfy the business needs of your company.",
                "position" => null,
            ]
        ];



        $story = [
            "heading" => [
                "title" => "How does the creation process looks like",
                "description" => "We offer comprehensive services and professional support at every stage of cooperation.",
                "position" => "center",
            ],
            "image" => "assets/images/story/design-process.png",
            "items" => [
                [
                    "heading" =>
                        [
                            "title" => "Discover & Estimate",
                            "description" => "Before the start, we make a research and deep analysis of the business-related industry to reduce technical and market risks while software development. We negotiate all requirement and write product specification considering your design suggestion. We discuss every detail while planning to satisfy your vision of the product.",

                        ],
                    "image" => "assets/images/story/web-1.jpg",
                ],
                [
                    "heading" =>
                        [
                            "title" => "Design",
                            "description" => "After absorbing your requirements and transformed them into prototypes you can click on. We create a recognizable design with simple and intuitive navigation to deliver a pleasant user experience.",

                        ],
                    "image" => "assets/images/story/web-2.jpg",
                ],
                [
                    "heading" =>
                        [
                            "title" => "Development",
                            "description" => "When we have designs our team of architects and engineers build the core of your product – secured, complex and trusted. We based our development process on agile methodology and it helps us to use time and resources in the most effective way, keep you updated and systematically demonstrate our results.",

                        ],
                    "image" => "assets/images/story/web-3.jpg",
                ],

                [
                    "heading" =>
                        [
                            "title" => "Testing",
                            "description" => "According to our standards of a development process, we keep both manual and automation testing while lifecycle of product development. We make sure that every link, script and form act and work in a proper way.",

                        ],
                    "image" => "assets/images/story/web-4.jpg",
                ],

                [
                    "heading" =>
                        [
                            "title" => "Go live",
                            "description" => "Once we finished testing and ensure that the product is stable, usable, secure and reliable, we are ready for the launch.",

                        ],
                    "image" => "assets/images/story/web-5.jpg",
                ],

                [
                    "heading" =>
                        [
                            "title" => "Maintenance",
                            "description" => "There is always room for improvement as we all work in limitless progress. That`s why we stay in touch with a client even after products’ release and ready to solve any issue at any time.",

                        ],
                    "image" => "assets/images/story/web-5.jpg",
                ],

            ]
        ];

        $feature2 = [
            "heading" => [
                "title" => "Tools",
//                "subTitle" => "Let your ideas be implemented into reality with the core technologies.",
                "description" => "We use the most innovative up to date tools to provide you with the highest development standards.",
                "position" => "center",
            ],
            "items" => [
                [
                    "title" => "React Js",
                    "image" => "/assets/images/features/react.png",
                ],
                [
                    "title" => "Vue JS",
                    "image" => "/assets/images/features/vue.png",
                ],
                [
                    "title" => "Django",
                    "image" => "/assets/images/features/django.png",
                ],
                [
                    "title" => "Node Js",
                    "image" => "/assets/images/features/node.png",
                ],
                [
                    "title" => "Laravel",
                    "image" => "/assets/images/features/laravel.png",
                ],
                [
                    "title" => "HTML 5",
                    "image" => "/assets/images/features/html.png",
                ],
            ]
        ];




        $call = [
            "heading" => [
                "title" => "Have a project?",
                "description" => " Let’s make it together!",
                "position" => "center",
                "subTitle" => null,

            ],
            "items" => [
                "href" => "/contact-us",
                "text" => "Contact Us",

            ]
        ];


        return view('pages.web_development')->with([
            'hero' => $hero,
            'feature2' => $feature2,
            'story' => $story,
            'call' => $call,
        ]);
    }

    public function mobileDevelopment()
    {

        $hero = [
            "heading" => [
                "h1" => "Mobile App development",
                "subTitle" => "Let’s go Mobile world. Impactful custom app development it is about us.",
                "description" => "Leverage our comprehensive approach for industry-specific solutions. We provide our clients with both cross-platform or native apps considering all business needs. We’ve been using the most innovative technologies to increase business security, improve key operations and provide an exceptional user experience for the customers.",
            ]
        ];

        $feature = [
            "heading" => [
                "title" => "We are professionals in React Native and Flutter",
                "position" => "center",
            ],
            "items" => [
                [
                    "title" => "Fast delivery",
                    "description" => "We know how to create your app in the shortest time - from user-facing front-end up to the server side behind it. With a set of tools that we use it is easy to get your app completely up and running.",
                    "image" => "/assets/images/features/clock.png",
                ],
                [
                    "title" => "Adaptable and modifying UI",
                    "description" => "We focus on native end-user experience. Our ready-made modules and layered architecture allows to make any changes extremely fast which leads to remarkable and expressive designs.",
                    "image" => "/assets/images/features/responsive.png",
                ],
                [
                    "title" => "Excellent performance",
                    "description" => "We pay attention to every principle platform difference such as fronts, scrolling, navigation to provide full native performance on IOS and android.", "image" => "/assets/images/features/speed.png",
                ],


            ]
        ];

        $story = [
            "heading" => [
                "title" => "It’s easy go",
                "position" => "center",
            ],
            "image" => "assets/images/story/design-process.png",
            "items" => [
                [
                    "heading" =>
                        [
                            "title" => "Discover & Estimate",
                            "description" => "We collect and analyze your requirements to solve the challenge and bring the best solution considering timeline and budget. As soon as we get your main and agreed app features and design, we are ready to start the journey.",

                        ],
                    "image" => "assets/images/story/data-1.jpg",
                ],
                [
                    "heading" =>
                        [
                            "title" => "Design & Clickable prototype",
                            "description" => "Based on expertise that we’ve got after the first stage, we proceed to clickable prototype creation. We will make sure that you get couple layouts to choose the best way to perform them into UI/UX design.",

                        ],
                    "image" => "assets/images/story/data-2.jpg",
                ],
                [
                    "heading" =>
                        [
                            "title" => "APP development",
                            "description" => "Design creation closely relates with development process. We divide development into sprints which gives us a chance to demonstrate you results of our work and get your feedback at every touchpoint.",

                        ],
                    "image" => "assets/images/story/data-3.jpg",
                ],

                [
                    "heading" =>
                        [
                            "title" => "Testing",
                            "description" => "Quality assurance is necessary for flawless app releases. We put on duty the team of experts that fix any possible bugs and defects and ensure your software goes like a clockwork.",

                        ],
                    "image" => "assets/images/story/data-4.jpg",
                ],

                [
                    "heading" =>
                        [
                            "title" => "Deployment",
                            "description" => "After all work is done, we are ready to show your product to the world and deliver the most enjoyable user experience for your customers.",

                        ],
                    "image" => "assets/images/story/data-5.jpg",
                ],

                [
                    "heading" =>
                        [
                            "title" => "Maintenance",
                            "description" => "After the product release, we support and improve your app to meet demanding end users needs in future. Our team stay in touch with you and ready to help with any issue at any time.",

                        ],
                    "image" => "assets/images/story/data-5.jpg",
                ],

            ]
        ];






        $call = [
            "heading" => [
                "title" => "Have a project?",
                "description" => " Let’s make it together!",
                "position" => "center",
                "subTitle" => null,

            ],
            "items" => [
                "href" => "/contact-us",
                "text" => "Contact Us",

            ]
        ];


        return view('pages.mobile_development')->with([
            'hero' => $hero,
            'feature' => $feature,
            'story' => $story,
            'call' => $call,
        ]);

    }

    public function login()
    {
        $heading = [
            "h1" => "Login",
//           "subTitle" =>"اطلاعات تماس خود را وارد نمایید تا در اسرع وقت با شما تماس بگیریم",

            "position" => "center"
        ];


        return view('pages.login', compact('heading'));

    }

    public function service()
    {
        $service = [
            "heading" => [
                "h1" => "Services",
                "position" => "center"
            ],
            "items" => [
                [
                    "title" => " UI/UX Design",
                    "image" => "/assets/images/features/1-1.png",
                    "url" => "design",
                    "description" => "Design that suits your business",
                ],
                [
                    "title" => "Artificial intelligence & Machine learning",
                    "image" => "/assets/images/features/1-3.png",
                    "url" => "machine-learning",
                    "description" => "Transform into an AI-driven company, using machine learning models that bring complex solutions for your business needs.",
                ],
                [
                    "title" => "Mobile App development",
                    "image" => "/assets/images/features/1-2.png",
                    "url" => "mobile-development",
                    "description" => "Let’s go Mobile world. Impactful custom app development it is about us.",
                ],
                [
                    "title" => "Web App development",
                    "image" => "/assets/images/features/1-2.png",
                    "url" => "web-development",
                    "description" => "Future Web Platform",
                ],
            ]
        ];


        return view('pages.service', compact('service'));

    }

    public function contactUs()
    {

        $heading = [
            "h1" => "Contact us",
            "subTitle" => "Drop us a message and let`s make it happen",

            "position" => "center"
        ];

        return view('pages.contact_us', compact('heading'));

    }

    public function aboutUs()
    {
        $hero = [
            "heading" => [
                "h1" => "About us",
                "subTitle" => "Innovative. Challenging. Reliable.",
                "description" => "We are an innovative technology company, specializing in mobile web development, design creation, Blockchain and STO development solutions. We do believe in approaching every project no matter how creative your idea is. Combining our tech expertise with your business needs we ensure that your business will have a profitable competitive advantage.",
            ],
        ];

        $story = [
            "heading" => [
                "title" => "We offer",
                "position" => "center",
            ],
            "items" => [
                [
                    "items" => [
                        [
                            "title" => "Design",
                            "icon" => "<span class='ti-check-box' />",
                            "body" => "We create delightful design and branding – intuitive, simple, unique. We will mold your ideal into design aimed to inspire and grow your business",

                        ],
                        [
                            "title" => "Web development",
                            "icon" => "<span class='ti-check-box' />",
                            "body" => "We know different ways how to make your project perform in today’s competitive marketplace. Our team pursue the highest quality of back-end as well as front-end experience.",

                        ],

                        [
                            "title" => "App development",
                            "icon" => "<span class='ti-check-box' />",
                            "body" => "Going mobile we will help your business to establish an application and bring value to the demanding modern customers. With our new approach in mobile app development we will help our clients succeed with a mobile strategy.",

                        ],
                    ],

                    "image" => "/assets/images/phones/mobile-app-4.png",
                ],
            ]
        ];


        $feature = [
            "heading" => [
                "title" => "Who we are?",
                "description" => "We are your easiest solution ever.",
                "position" => "center",
                "icon" => "<span class='ti-check-box' />",
            ],
            "items" => [
                [
                    "title" => "Innovation inspired",
                    "body" => "We hold a hand on a pulse of the newest development tendencies in the digital world. At our disposal, we have various up to date tools to stay on top and provide our customers with the most innovative solutions.",
                    "avatar" => "",
                    "icon" => "<span class='ti-check-box' />",
                ],
                [
                    "title" => "Open minded",
                    "body" => "We are the team of out of box thinkers. We are searching for challenging ideas to show how to make the impossible become possible and even real.",
                    "avatar" => "",
                    "icon" => "<span class='ti-check-box' />",
                ],
                [
                    "title" => "Client and result oriented",
                    "body" => "We always value your ideas and your business needs. Explore your ideas in the most innovative way and implement it as your best business practice. Your success is the best reward for us.",
                    "avatar" => "",
                    "icon" => "<span class='ti-check-box' />",
                ],
                [
                    "title" => "Technology focused",
                    "body" => "High tech tools and new technologies are the synonyms to successful business processes. We believe that providing innovative technologies to your business make your service unique, competitive and profitable.", "avatar" => "",
                    "icon" => "<span class='ti-check-box' />",
                ],

            ]

        ];


        $call = [
            "heading" => [
                "title" => "Have a project?",
                "description" => " Let’s make it together!",
                "position" => "center",
                "subTitle" => null,

            ],
            "items" => [
                "href" => "/contact-us",
                "text" => "Contact Us",

            ]
        ];

        return view('pages.about_us')->with([
            'hero' => $hero,
            'story' => $story,
            'feature' => $feature,
            'call' => $call,
        ]);

    }
}
