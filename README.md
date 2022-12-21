paleta de colores
    gris: #BDBEC1
    azul oscuro: #045373
    celeste: #0B9ABD
    turqueza: #357E8E
    marroncito: #8E8379
    


   
    <body>
    <header class="busqueda">
        <section id="menu">
            <ul >    
                <a href="#">HOME</a>
                <a href="#">ABOUT ME</a>
                <a href="#">SERVICES</a>
                <a href="#">MY SKILLS</a>
                <a href="#">CONTACT</a>
            </ul>    
        </section>
    </header>
    

<!--HOME-->
    <div class="container-home">   
        <div class="row home"> 
            <div class="col-lg-6">
                <div class="texto">
                    <P>Hello there...</P>
                    <h1><b>Tomás Sangoy</b></h1>
                    <p><b>I am a Web Developer</b></p><br>
                    <p>My goal is to be able to meet customer expectations and constantly train myself, depending on market demand.</p>     
                    <div class="botones">
                        <a class="m-btn m-btn-theme" href="">ABOUT ME</a>
                        <a class="m-btn m-btn-t-theme" href="">MY SKILLS</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <img src="/imagenes/foto.jpg" width="60%" height="70%" alt>
            </div>
        </div>
    </div>

    <!--ABOUT ME-->
    <div class="container-about">        
        <div class="row titulo">
            <div class="col-lg-12 title">
                <h3>ABOUT ME</h3> 
                <P>A WEB DESIGNER, RECEIVED IN ARGENTINA</P>
            </div>
        </div>
        <div class="row foto-listas">
            <div class="col-lg-5">
                <img src="/imagenes/foto.jpg" width="70%" height="80%">
            </div>
            <div class="col-lg-7 info">
                <div class="informacion">
                    <h4>I´M TOMÁS SANGOY</h4>
                    <p>A WEB DESIGNER, RECEIVED IN ARGENTINA</p><br>
                    <p class="objetivo">I design and develop services for customers of all sizes, specializing in creating stylish, modern websites, web services and online stores. My passion is to design digital user experiences through the bold interface and meaningful interactions. Check out my Portfolio</p>
                </div>                    
                <div class="row inf-listas">
                    <div class="col-md-6 columna1">
                        <div class="media">
                            <label>Birthday</label>
                            <p>20th September 2002</p>
                        </div>
                        <div class="media">
                            <label>Age</label>
                            <p>20 Yr</p>
                        </div>
                        <div class="media">
                            <label>Residence</label>
                            <p>Argentina</p>
                        </div>
                        <div class="media">
                            <label>Address</label>
                            <p>Cordoba,Argentina</p>
                        </div>
                    </div>
                    <div class="col-md-6 columna2">
                        <div class="media">
                            <label>E-mail</label>
                            <p>tomas.sangoy@gmail.com</p>
                        </div>
                        <div class="media">
                            <label>Phone</label>
                            <p>3512371693</p>
                        </div>
                        <div class="media">
                            <label>Instagram</label>
                            <p>tomy_sangoy20</p>
                        </div>
                        <div class="media">
                            <label>Freelance</label>
                            <p>Available</p>
                        </div>
                    </div>
                </div>
                <div class="btn-bar">
                    <a class="m-btn m-btn-theme" href="">Download CV</a>
                </div>
            </div>    
        </div>               
    </div>
    
    <!--SKILLS-->
    <div class="container-fluid skills">
        <div class="title-skills">
            <h3>MY SKILLS</h3>
            <p>Languages and frameworks that I use</p>
        </div>
        <div class="row lenguajes-content-between">
            <div class="col-lg-6 m-15px-tb">
                <!--4 skills-->
                <div class="skill-It">
                    <H6 class="dark-color">HTML5</H6>
                    <div class="skill-bar">
                        <div class="skill-bar-in theme-bg" role="progressbar" aria-valuenow="92" aria-valuemin="0" aria-valuemax="100" style="width: 92%;">
                            <span>92%</span>
                        </div>
                    </div>
                    <H6 class="dark-color">CSS</H6>
                    <div class="skill-bar">
                        <div class="skill-bar-in theme-bg" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: 70%;">
                            <span>70%</span>
                        </div>
                    </div>
                    <H6 class="dark-color">BOOTSTRAP</H6>
                    <div class="skill-bar">
                        <div class="skill-bar-in theme-bg" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%;">
                            <span>40%</span>
                        </div>
                    </div>
                    <H6 class="dark-color">ANGULAR</H6>
                    <div class="skill-bar">
                        <div class="skill-bar-in theme-bg" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%;">
                            <span>40%</span>
                        </div>
                    </div>
                    <H6 class="dark-color">JAVASCRIPT</H6>
                    <div class="skill-bar">
                        <div class="skill-bar-in theme-bg" role="progressbar" aria-valuenow="92" aria-valuemin="0" aria-valuemax="100" style="width: 92%;">
                            <span>92%</span>
                        </div>
                    </div>
                    <H6 class="dark-color">GITHUB</H6>
                    <div class="skill-bar">
                        <div class="skill-bar-in theme-bg" role="progressbar" aria-valuenow="92" aria-valuemin="0" aria-valuemax="100" style="width: 92%;">
                            <span>92%</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-5 m-15px-tb">

            </div>
        </div>
    </div>

    <!--contact-->
    <div class="container-contact">
        <div class="titulo">
            <div>
                <h3>
                    GET IN TOUCH
                </h3>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-8 m-15px-tb">
                <div class="contact-form box-shadow">
                    <h4 class="dark-color font-alt m-20px-b">Put your message</h4>
                    <form id="contact-form" method="POST">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <input name="Name" id="name" placeholder="Name*" class="form-control" type="text">
                                <span class="input-focus-effect theme-bg"></span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <input name="Email" id="email" placeholder="Email*" class="form-control" type="email">
                                <span class="input-focus-effect theme-bg"></span>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <input name="Subject" id="subject" placeholder="Subject*" class="form-control" type="text">
                                <span class="input-focus-effect theme-bg"></span>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <input name="message" id="message" placeholder="Your message*" class="form-control" type="text">
                                <span class="input-focus-effect theme-bg"></span>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="send">
                                <button class="m-btn m-btn-theme" onclick="send_mail()" type="button" value="send">send message</button>
                            </div>
                            <span id="suce_message" class="text-success" style="display: none;" >Message Sent Successfully</span>
                            <span id="err_message" class="text-danger" style="display: none;">Message Sending Failed</span>
                        </div>
                    </div>
                </form>
                </div>
            </div>
            <div class="col-lg-4 m-15px-tb">
                <div class="contact-info media box-shadow">
                    <div class="icon">
                        <i class="ti-location-pin">
                        </i>
                    </div>
                    <div class="media-body">
                        <h6 class="dark-color font-alt">My Address</h6>
                        <p>Cordoba, Capital - Argentina</p>
                    </div>
                </div>
                <div class="contact-info media box-shadow">
                    <div class="icon">
                        <i class="ti-mobile">
                        </i>
                    </div>
                    <div class="media-body">
                        <h6 class="dark-color font-alt">My phone</h6>
                        <p>Personal phone: +54 3512371693</p>
                    </div>
                </div>
                <div class="contact-info media box-shadow">
                    <div class="icon">
                        <i class="ti-email">
                        </i>
                    </div>
                    <div class="media-body">
                        <h6 class="dark-color font-alt">My Email</h6>
                        <p>tomas.sangoy@gmail.com</p>
                    </div>
                </div>
            </div>
        </div>
</body>