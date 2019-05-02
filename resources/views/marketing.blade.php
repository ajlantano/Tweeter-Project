<!DOCTYPE html>
    <html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <title>Tweeter Marketing</title>
    </head>
    <body id="marketingbody">
        <div class="jumbotron">
            <h1 class="display-4">Thoughts So Provoking They Only Live On The Internet</h1>
            <p class="lead">Tweeter is and will be more than just statuses, we break the status quo.</p>
            <hr class="my-4">
            <p>Never Be Bogged Down By Over Complications.</p>
        </div>

        <ul class="nav nav-pills nav-fill sticky-top">
            <li class="nav-item">
                <a class="nav-link " href="#box2">Show Me Some History!</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#box3">What Tweeter Is</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#box4">What Tweeter Can Be</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#box5" tabindex="-1" aria-hidden="true">Tweeter Usage</a>
            </li>
            <li class="nav-item">
                <a href="{{route('register')}}" class="nav-link" tabindex="-1">Tweet Out Loud Here</a>
            </li>
        </ul>

        <hr>
        <div class="para"id="lax1">
            <h1 class=" title text-center" data-aos="zoom-in-up">Simplifying Thoughts, Tweet Out Loud!</h1>
            <div class="card-columns">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Tweet Out Loud!</h5>
                        <p class="card-text">Tweeting is good for the soul</p>
                    </div>
                </div>
                <div class="card p-3">
                    <blockquote class="blockquote mb-0 card-body">
                        <p>I had this one thought and instead of saying it out loud I just tweeted it and avoided a slap in the face physically!</p>
                        <footer class="blockquote-footer">
                            <small class="text-muted">
                                Sansa Stark <cite title="Source Title">Winterfell Daily Bugle</cite>
                            </small>
                        </footer>
                    </blockquote>
                </div>
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Innovation & Disruption</h5>
                        <p class="card-text">Tweeter has crashed the social media phase with another social media app that makes it MORE easy to speak your mind!</p>
                    </div>
                </div>
                <div class="card bg-primary text-white text-center p-3">
                    <blockquote class="blockquote mb-0">
                        <p>I never speak words, I just Tweet Things!</p>
                        <footer class="blockquote-footer text-white">
                            <small>
                                Third Eye Raven <cite title="Source Title">In The Tree Herald</cite>
                            </small>
                        </footer>
                    </blockquote>
                </div>
                <div class="card text-center">
                    <div class="card-body">
                        <h5 class="card-title">So Easy To Use, It's Mindless</h5>
                        <p class="card-text">We pride ourselves on an easy to use interface, even the less tech savvy people can use it!</p>
                    </div>
                </div>
                <div class="card p-3 text-right">
                    <blockquote class="blockquote mb-0">
                        <p>My Grandma Tweets Constantly, It's Amazing!</p>
                        <footer class="blockquote-footer">
                            <small class="text-muted">
                                The Lannisters in <cite title="Source Title">Kings Landing Daily</cite>
                            </small>
                        </footer>
                    </blockquote>
                </div>
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">All You Gotta Do Is Register!</h5>
                        <p class="card-text">Registration has never been so easy!</p>
                        <p class="card-text"><a href="{{route('register')}}">
                            <button type="button" class="btn btn-primary btn-lg">
                                Register Here!
                            </button>
                        </a>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="para"id="lax2">
        <div class="container" data-aos="fade-right" id="box1">
            <div id="box2">
                <h2 class="title">Tweeter History</h2>
                <p class="blurb">Tweeter was developed by Junior Web Developer AJ Lantano, his idea and vision for the site was inspired by how hard it was to use "the other comptetion" so he aimed high and decided to create a simpler more user friendly version and needles to say his vision came true as we now have a platform for free thinkers who just want to tweet out loud!</p>
            </div>
        </div>
        <ul class="timeline">
            <li>
                <div class="timeline-panel" data-aos="flip-left">
                    <div class="timeline-heading">
                        <h4>The Beginning Of it All</h4>
                    </div>
                    <div class="timeline-body">
                        <p>AJ was On the "Comptentio's" website, got confused threw his phone.</p>
                    </div>
                    <div class="timeline-footer">
                        <p class="text-right">Feb-21-2014</p>
                    </div>
                </div>
            </li>
            <li class="timeline-inverted">
                <div class="timeline-panel"data-aos="flip-right">
                    <div class="timeline-heading">
                        <h4>Configuring His New Phone</h4>
                    </div>
                    <div class="timeline-body">
                        <p>AJ figured he could build a better application with less complications and get down to the basic functions, so everyone can use it!</p>
                    </div>
                    <div class="timeline-footer">
                        <p class="text-right">Feb-23-2014</p>
                    </div>
                </div>
            </li>
            <li>
                <div class="timeline-panel" data-aos="flip-up">
                    <div class="timeline-heading">
                        <h4>Building</h4>
                    </div>
                    <div class="timeline-body">
                        <p>He then plugged away for days to put together the right application. </p>
                    </div>
                    <div class="timeline-footer">
                        <p class="text-right">September-7th-2014</p>
                    </div>
                </div>
            </li>
            <li class="timeline-inverted" data-aos="flip-down">
                <div class="timeline-panel">
                    <div class="timeline-heading">
                        <h4>The 5th Year Of Development</h4>
                    </div>
                    <div class="timeline-body">
                        <p>Exactly 4 years from the day he sat down he finally figured out exactly how to get it to work. </p>
                    </div>
                    <div class="timeline-footer">
                        <p class="text-right">September-7th-2018</p>
                    </div>
                </div>
            </li>
            <li>
                <div class="timeline-panel" data-aos="flip-up">
                    <div class="timeline-heading">
                        <h4>Deployment Day!</h4>
                    </div>
                    <div class="timeline-body">
                        <p>Today was the day the app launched needless to say it did very successful with 2 users within the first hour!</p>
                    </div>
                    <div class="timeline-footer">
                        <p class="text-right">May-05-2019</p>
                    </div>
                </div>
            </li>
            <li class="clearfix no-float"></li>
        </ul>
    </div>
    <div class="para"id="lax3">
        <div class="container" data-aos="fade-left">
            <div id="box3">
                <h2 class="title">What Is Tweeter You Ask?</h2>
                <p class="blurb">Tweeter is a public platform that allows you to Tweet Out Loud and say what you need to say, upon registration you are outfitted with a profile to customize as you see fit, you can show other tweeters that you like their post by liking and even drop them a comment, no matter what the outcome is you will have the freedom to say it! We preach love and support so please tweet responsibly!</p>
            </div>
        </div>
    </div>
    <div class="para"id="lax4">
        <div class="container" data-aos="fade-up-right">
            <div id="box4">
                <h2 class="title">Tweeter Can Be Anything You Want!</h2>
                <p class="blurb">Don't be bogged down by the "comptetion's" hard system of use. Tweeter is an easy place to get your thoughts out without all the fluff of socaial confines depcited by other site. Here we write our own rules. Tweeter literally can be the place you go to publically get your thoughts out! We pride ourselves on the conept of Tweeting Out Loud for the specific reason that sometimes when physical speech fails, you can have a place where you can SHOUT! at the top of your lungs without having to in real life. Some people put their lives on display and find it to be the most gratifying and moving thing ever. Tweeter is a haven for free speech and you should always TWEET OUT LOUD! </p>
            </div>
        </div>
    </div>
    <div class="para" id="lax5">
        <div class="container" data-aos="fade-up-left">
            <div id="box5">
                <h2 class="title">So You Wanna Use Tweeter?</h2>
                <p class="blurb">If you've made it this far which I hope you have, you are at the point where you wanna start your journey to getting your thoughts out there. Firstly, you must register and customize your profile, once that is done, congratulations you have freed yourself from the social confines of society and now have joined the freedom of speech! You are now able to TWEET OUT LOUD!</p>
            </div>
        </div>
        <figure class="text-center" data-aos="zoom-in-up">
            <iframe src="https://giphy.com/embed/l3vR0tWFQqr6bM8Uw" width="480" height="480" frameBorder="0" class="giphy-embed" allowFullScreen></iframe><p><a href="https://giphy.com/gifs/phone-hand-boston-terrier-l3vR0tWFQqr6bM8Uw">via GIPHY</a></p>
        </figure>
    </div>
    <hr class="my-4">
    <a href="{{route('register')}}">
        <button type="button" class="btn btn-primary btn-lg btn-block">
            Register Here!
        </button>
    </a>
    <hr class="my-4">


    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="/js/marketing.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script><script>
    AOS.init({
        easing: 'ease-out-back',
        duration: 800,
        delay: 300,
        once:false,
    });
    </script>
    </body>
</html>
