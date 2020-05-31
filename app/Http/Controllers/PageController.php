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
                "h1" => "With Afracode, 
				 Invest 
				 in Your Success!",
                "subTitle" => "\"The best time to plant a tree was 20 years ago. 
				The second best time is now.\"",
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
                    "description" => "Enhance your business with a great design!",
                ],
                [
                    "title" => "AI & ML Development",
                    "image" => "/assets/images/features/1-3.png",
                    "url" => "machine-learning",
                    "description" => "Transform into an AI-driven company, using machine learning models that bring complex solutions for your business needs.",
                ],
                [
                    "title" => "Mobile Development",
                    "image" => "/assets/images/features/1-2.png",
                    "url" => "mobile-development",
                    "description" => "Let’s go Mobile world. Impactful custom app development it is about us.",
                ],
                [
                    "title" => "Web Development",
                    "image" => "/assets/images/features/1-2.png",
                    "url" => "web-development",
                    "description" => "Future Web Platform",
                ],
            ]

        ];


        $blog = [
            "heading" => [
                "title" => "Blog",
                "description" => "Find the lastest tech news and educational articles on the Afracode blog",
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
                "subTitle" => "Enhance your business with a great design!",
                "description" => "Keep your customers satisfied with your product/service to make them loyal. Combining our creativity and experience in the design of your website, we find the best way to impress your customers and keep them loyal to your product.
				Keep your customers happy to make them fall in love with your product.",
            ],
        ];

        $story = [
            "heading" => [
                "title" => "How does the UI/UX design process look like on Afracode?",
                "position" => "center",
            ],
            "items" => [
                [
                    "heading" =>
                        [
                            "title" => "The Empathise Stage",
                            "description" => "First, we need to understand the challenges we are facing with.  With analyzing and interacting with each other, our experts find out all the concerns. This helps us to realize which goal we should achieve.",

                        ],
                    "image" => "/assets/images/story/design-1.jpg",
                ],
                [
                    "heading" =>
                        [
                            "title" => "Defining the problem",
                            "description" => "After researching and gathering the required information, we identify the main problem. At this stage, you as the owner of the project, are required to share your views and needs with us. This will help us to always be close to the project's goal. Also, it will assist our designers to achieve the best features and functions for solving the issue and boosting your business.",

                        ],
                    "image" => "/assets/images/story/design-2.jpg",
                ],
                [
                    "heading" =>
                        [
                            "title" => "The Ideation Phase",
                            "description" => "At this stage, we find the best solutions to the identified problems. With analyzing the market as well as the weakness and strength of competitors, we identify the target audience needs. This will help us to reduce the likelihood of failure in the future and make the design as successful as possible..",

                        ],
                    "image" => "/assets/images/story/design-3.jpg",
                ],

                [
                    "heading" =>
                        [
                            "title" => "Prototype Design",
                            "description" => "After identifying the visual aspects of the project, we turn to the technical part of the design. At this stage, we will involve our development team in the project and find out the most efficient ways for implementing the design in the project. This means that in addition to creating the design, we provide the best way to perform it into the real.",

                        ],
                    "image" => "/assets/images/story/design-4.jpg",
                ],

                [
                    "heading" =>
                        [
                            "title" => "The Testing Stage",
                            "description" => "The development process will be started as soon as all designs are approved. From the beginning, the necessary tests are performed to make sure that the product meets all the criteria and requirements. Before launching, we will perform another test to make sure that the end user will have a pleasant experience using your product.",

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
                    "title" => "Brand Design",
                    "image" => "/assets/images/features/clock.png",
                    "url" => "design",
                    "description" => "Design is an essential part of a business strategy and makes your product visible and your brand recognizable! We offer both branding and rebranding to our customers. We develop the most benefitial brand strategy for your product, based on the results of the research conducted by our marketing professionals.",
                ],
                [
                    "title" => "UI/UX",
                    "image" => "/assets/images/features/responsive.png",
                    "url" => "web-development",
                    "description" => "Using effective tools, we make eye-catching interface for your product. We create wonderful products users love. ",
                ],
                [
                    "title" => "Animation Illustration",
                    "image" => "/assets/images/features/speed.png",
                    "url" => "mobile-development",
                    "description" => "Creativity is our strength and makes us special! Creating interesting and engaging illustration/animations is what we provide you as an effective way taking your business to the next level.",
                ],
            ]

        ];


        $manager = [
            "heading" => [
                "title" => "Meet Our Design Manager at Afracode!",
                "description" => "A knowledgebale, experienced, and creative design manager is a prerequisite for the success of a team",
                "position" => "center"
            ],
            "items" => [
                "image" => "/assets/images/team/maryam.jpg",
                "title" => "Meet the director of the Afracode design department",
                "description" => "A knowledgebale, experienced, and creative art manager is a prerequisite for the success of a team",
                "name" => "Maryam Sharifineyestani",
                "role" => "Art Director",
                "bio" => "Creative and enthusiastic designer with more than 10 years of experience in Branding, Logo Design, User Experience, End-to-end Design of Apps, Websites, and Digital Products. Passionate about psychology makes her more interested in designing an egaging user experience."
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
                "h1" => "Artificial Intelligence & Machine Learning",
                "title" => null,
                "description" => "Our team of scientists provide advanced Intelligence Solutions for your business. Using artificial intelligence and machine learning, we improve customer experience and increase productivity in an innovative and effective way.",
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
                    "title" => "Predictive Modeling",
                    "image" => "/assets/images/features/clock.png",
                    "url" => "design",
                    "body" => "Our Predictive Models provide accurate predictions that enables companies to make more effective business decisions and deliver better customer services.",
                ],
                [
                    "title" => "Business Decision-making Solutions",
                    "image" => "/assets/images/features/responsive.png",
                    "url" => "web-development",
                    "body" => "Thanks to Machine Learning and AI-powered solutions, we can analyze large datasets faster and more accurately and therefore accelerate the decision-making processes in your company. ",
                ],
                [
                    "title" => "Chat Bots",
                    "image" => "/assets/images/features/speed.png",
                    "url" => "mobile-development",
                    "body" => "We automate and improve your customer service through our powerful AI-powered chat bots which delivering contextual and personalized customer conversations.  ",
                ],
                [
                    "title" => "Artificial Design Intelligence",
                    "image" => "/assets/images/features/speed.png",
                    "url" => "mobile-development",
                    "body" => "Using our AI-based solutions, we can design and optimize customized websites, create more engaging and responsive interfaces based on the project needs, business activity, or personal preferences. ",
                ],
            ]
        ];

        $story = [
            "heading" => [
                "title" => "How does AI/ML development process look like on Afracode?",
                "position" => "center",
            ],
            "image" => "assets/images/story/design-process.png",
            "items" => [
                [
                    "heading" =>
                        [
                            "title" => "Data Acquisition",
                            "description" => "With analyzing your business needs, we will determine whether your business really need an AI solution and if it does, we will find out the best AI model which suits your business. Our AI scientists will conduct research to specify how we can resolve the current issues and improve your company's performance.",

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
                            "title" => "Hypothesis Testing and Modeling",
                            "description" => "We will train and test data to discover which type of machine learning model will work the best for your business.",

                        ],
                    "image" => "assets/images/story/data-3.jpg",
                ],

                [
                    "heading" =>
                        [
                            "title" => "Evaluation & Interpretation",
                            "description" => "In this phase, the most efficient machine learning algorithm and AI model will be chosen which fit your business needs.",

                        ],
                    "image" => "assets/images/story/data-4.jpg",
                ],

                [
                    "heading" =>
                        [
                            "title" => "Deployment",
                            "description" => "We integrate the chosen AI model to your business.",

                        ],
                    "image" => "assets/images/story/data-5.jpg",
                ],

                [
                    "heading" =>
                        [
                            "title" => "Optimization",
                            "description" => "In the final step, we check the machine learning model and improve it as needed.",

                        ],
                    "image" => "assets/images/story/data-5.jpg",
                ],

            ]
        ];

        $feature2 = [
            "heading" => [
                "title" => "In which area, Machine Learning can be benefitial to your business?",
                "description" => "Some of the areas in which ML can be applicable are listed below:",
                "position" => "center",
            ],
            "items" => [
                [
                    "title" => "Sales",

                    "ul" => ["Improving Sales Forecasting",
                         "Customer Data Analysis",
                        "Predicting Customer Needs",
                        "Successful Sales Communication",
                    ], "image" => "/assets/images/features/sale.png",
                ],
                [
                    "title" => "Marketing",

                    "ul" => [
                        "Email Campaign Personalization",
                        "Meeting Customers' Needs",
                        "Offering Customized Products",
                        "Analyzing buying patterns",
                    ], "image" => "/assets/images/features/accounting.png",
                ],
                [
                    "title" => "Banking & Finance",

                    "ul" => [
                        "Customer Service",
                        "Portfolio Management",
                        "Fraud Detection",
                        "Sentiment Analysis"
                    ], "image" => "/assets/images/features/computer.png",
                ],
                [
                    "title" => "Human Resources",

                    "ul" => [
                        " Screening and Evaluating Candidates",
                        " Attracting Relevant Talent",
                        " Attrition Detection",
                        " Individual skill management"
                    ], "image" => "/assets/images/features/resume.png",
                ],
            ]
        ];


        $manager = [
            "heading" => [
                "title" => "Meet the director of AI/ML at Afracode",
                "description" => "A Knowlegeble manager is essential for the success of a team",
                "position" => "center"
            ],
            "items" => [
                "image" => "/assets/images/team/elham.png",
                "title" => "Meet the director of ML/AI development at Afracode",
                "description" => "A Knowlegeble manager is essential for the success of a team",
                "name" => "Elham Sharifineyestani",
                "role" => "AI Department Manager",
                "bio" => "Elham is a data scientist with Ph.D. in Engineering and over 8 yeras of work experience. She is highly skilled in data analysis, machine-learning, and predictive analytics. Besides of her profesional experience in programming, she loves digital marketing and is launching her own business as an entrepreneur."
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
