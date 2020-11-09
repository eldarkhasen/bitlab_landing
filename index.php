<!DOCTYPE html>
<html lang="ru">

<head>
   <title>BITLAB Academy | Курсы программирования для студентов</title>
   <meta charset="UTF-8">
   <meta name="format-detection" content="telephone=no">
   <link rel="stylesheet" href="css/style.min.css">
   <link rel="shortcut icon" href="favicon.ico">
   <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800;900&display=swap"
      rel="stylesheet">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta name="msapplication-navbutton-color" content="#0accda">
   <meta name="apple-mobile-web-app-status-bar-style" content="#0accda">
   <meta name="theme-color" content="#0accda">
</head>

<body>
   <div class="wrapper">
      <nav class="nav">
         <div class="nav__content">
            <a href="/" class="nav__logo">
               <img src="img/logo.svg" alt="Logo">
            </a>
            <a href="https://edu.bitlab.academy" target="_blank" class="btn">Войти</a>
         </div>
      </nav>
      <main class="page">

         <div id="record" class="modal record-modal">
            <button class="modal__btn close-btn">
               <i class="icon-ui icon-ui__cross"></i>
            </button>
            <div class="modal-content record-modal__content">
               <h1 class="record-modal__content_title">
                  Оставьте заявку и мы проконсультируем вас
               </h1>
               <form class="record-modal__content_form">
                  <p class="dn error-text"></p>
                  <input name="name" type="text" placeholder="Ваше имя..." class="light">
                  <select name="course" class="light">
                     <option value="Not selected" disabled selected>Выберите курс</option>
                     <option value="3">C++ basics</option>
                     <option value="2">Java basics</option>
                     <option value="4">Python basics</option>
                  </select>
                  <input name="phone" type="tel" placeholder="+7" class="light" autocomplete="off">
                  <p class="record-modal__content_caution">
                     *Оставляя заявку, Вы даете согласие на обработку персональных данных
                  </p>
                  <button type="button" onclick="toSendRequest()" name="send" class="btn btn__rounded md">
                     Отправить
                  </button>
               </form>
            </div>
         </div>
         <div id="contact-result"></div>
         <div id="loader" title="2">
            <div class="circle"></div>
         </div>

         <header class="header details-bg">
            <div class="header__content container ph-lg">
               <p class="header__uptitle">курсы для студентов</p>
               <h1 class="header__title">
                  Интенсивные курсы программирования, которые помогут вам сдать экзамены
                  <span class="red">или мы вернем вам деньги</span>
               </h1>
               <p class="header__description">Возврат осуществляется после полного прохождения курса
               </p>
               <button class="btn btn__rounded lg mt-md" data-toggle="modal" data-modal="record">
                  Бесплатная консультация
               </button>
            </div>
         </header>

         <!-- THINK -->
         <section class="section p-md">
            <div class="container section-think">
               <div class="section-think__text">
                  <p class="section-think__text_p">
                     Мы с пониманием относимся к тому, что из-за
                     <span class="red">пандемии</span>
                     многим сложно привыкать к новому формату обучения.
                  </p>
                  <p class="section-think__text_p">
                     Поэтому мы предлагаем ускоренные курсы программирования, пройдя которые, вы сможете получить
                     необходимые знания для успешной сдачи экзаменов!
                  </p>
                  <p class="section-think__text_p red">
                     Мы вернем вам деньги если вы не сможете сдать сессию!
                  </p>
               </div>
               <div class="section-think__img">
                  <img src="img/bg-images/emoji-think.png" alt="Emoji">
               </div>
            </div>
         </section>

         <!-- COURSES -->
         <section class="section p-lg">
            <div class="section__flex_center container">
               <h1 class="section__title text-center">Наши направления</h1>
               <p class="section__subtitle text-center">Выбери себе подходящий курс</p>
               <div class="section__courses">

                  <div class="section__courses_elem section-course">
                     <div class="section-course__icon"><img src="img/courses/cpp.png" alt="Java SE Icon"></div>
                     <h1 class="section-course__title">C++ basics</h1>
                     <p class="section-course__subtitle">Основы кодинга на С++</p>
                     <h2 class="section-course__price">15 000 ₸/мес</h2>
                     <h3 class="section-course__price_prev">35 000 ₸/мес</h3>
                     <ul class="section-course__info">
                        <li class="section-course__info_elem">
                           <i class="icon icon-courses icon-courses__duration"></i>
                           Длительность:&nbsp;<span class="bold">4 недели</span>
                        </li>
                        <li class="section-course__info_elem">
                           <i class="icon icon-courses icon-courses__level"></i>
                           Уровень:&nbsp;<span class="bold">начальный</span>
                        </li>
                        <li class="section-course__info_elem">
                           <i class="icon icon-courses icon-courses__start"></i>
                           Старт:&nbsp;<span class="bold">11 ноября</span>
                        </li>
                        <li class="section-course__info_elem">
                           <i class="icon icon-courses icon-courses__time"></i>
                           <span class="bold">Пн-Ср 14:00-17:00</span>
                        </li>
                        <li class="section-course__info_elem">
                           <i class="icon icon-courses icon-courses__places"></i>
                           Количество студентов:&nbsp;<span class="bold">10-12</span>
                        </li>
                     </ul>
                     <p class="section-course__program" hidden data-course="3">
                        С++ - это отличный язык для изучения алгоритмизации.
                        <br>
                        Вы изучите следующие темы: условные операторы, циклы for/while/do-while, массивы,
                        многомерные массивы, функции, рекурсия и написание собственных алгоритмов.
                        <br>
                        Все темы будут закрепляться мощной практикой, которую мы подготовили специально для вас!
                        Разберем популярные задачи и методы применения алгоритмов для их решения!
                     </p>
                     <button class="btn btn__rounded md" data-toggle="modal" data-modal="course-details">
                        Подробнее
                     </button>
                  </div>

                  <div class="section__courses_elem section-course">
                     <div class="section-course__icon"><img src="img/courses/python.png" alt="Python Icon"></div>
                     <h1 class="section-course__title">Python basics</h1>
                     <p class="section-course__subtitle">Основы кодинга на Python</p>
                     <h2 class="section-course__price">15 000 ₸/мес</h2>
                     <h3 class="section-course__price_prev">35 000 ₸/мес</h3>
                     <ul class="section-course__info">
                        <li class="section-course__info_elem duration">
                           <i class="icon icon-courses icon-courses__duration"></i>
                           Длительность:&nbsp;<span class="bold">4 недели</span>
                        </li>
                        <li class="section-course__info_elem">
                           <i class="icon icon-courses icon-courses__level"></i>
                           Уровень:&nbsp;<span class="bold">начальный</span>
                        </li>
                        <li class="section-course__info_elem">
                           <i class="icon icon-courses icon-courses__start"></i>
                           Старт:&nbsp;<span class="bold">Скоро</span>
                        </li>
                        <li class="section-course__info_elem">
                           <i class="icon icon-courses icon-courses__time"></i>
                           <span class="bold">Скоро</span>
                        </li>
                        <li class="section-course__info_elem">
                           <i class="icon icon-courses icon-courses__places"></i>
                           Количество студентов:&nbsp;<span class="bold">10-12</span>
                        </li>
                     </ul>
                     <p class="section-course__program" hidden data-course="4">
                        Python - это отличный язык для изучения алгоритмизации.
                        <br>
                        Вы изучите следующие темы: условные операторы, циклы for/while/do-while, массивы,
                        многомерные массивы, функции, рекурсия и написание собственных алгоритмов.
                        <br>
                        Все темы будут закрепляться мощной практикой, которую мы подготовили специально для вас!
                        Разберем популярные задачи и методы применения алгоритмов для их решения!
                     </p>
                     <button class="btn btn__rounded md" data-toggle="modal" data-modal="course-details">
                        Подробнее
                     </button>
                  </div>

                  <div class="section__courses_elem section-course">
                     <div class="section-course__icon">
                        <img src="img/courses/web-intensive.png" alt="Web Intensive Icon">
                     </div>
                     <h1 class="section-course__title">Java Basics</h1>
                     <p class="section-course__subtitle">Основы кодинга на Java</p>
                     <h2 class="section-course__price">15 000 ₸/мес</h2>
                     <h3 class="section-course__price_prev">35 000 ₸/мес</h3>
                     <ul class="section-course__info">
                        <li class="section-course__info_elem">
                           <i class="icon icon-courses icon-courses__duration"></i>
                           Длительность:&nbsp;<span class="bold">4 недели</span>
                        </li>
                        <li class="section-course__info_elem">
                           <i class="icon icon-courses icon-courses__level"></i>
                           Уровень:&nbsp;<span class="bold">начальный</span>
                        </li>
                        <li class="section-course__info_elem">
                           <i class="icon icon-courses icon-courses__start"></i>
                           Старт:&nbsp;<span class="bold">Скоро</span>
                        </li>
                        <li class="section-course__info_elem">
                           <i class="icon icon-courses icon-courses__time"></i>
                           <span class="bold">Скоро</span>
                        </li>
                        <li class="section-course__info_elem">
                           <i class="icon icon-courses icon-courses__places"></i>
                           Количество студентов:&nbsp;<span class="bold">10-12</span>
                        </li>
                     </ul>
                     <p class="section-course__program" hidden data-course="2">
                        Java - это один из самых востребованных языков в мире. Многие рекомендуют начать именно с
                        него или же с С++.<br>
                        Вы изучите следующие темы: условные операторы, циклы for/while/do-while, массивы,
                        многомерные массивы, функции, рекурсия и написание собственных алгоритмов.<br>
                        Все темы будут закрепляться мощной практикой, которую мы подготовили специально для вас!
                        Разберем популярные задачи и методы применения алгоритмов для их решения!
                     </p>
                     <button class="btn btn__rounded md" data-toggle="modal" data-modal="course-details">
                        Подробнее
                     </button>
                  </div>
               </div>

               <div id="course-details" class="modal section-course-modal">
                  <button class="modal__btn close-btn">
                     <i class="icon-ui icon-ui__cross"></i>
                  </button>
                  <div class="modal-content section-course-modal__content">
                     <h1 class="section-course-modal__content_title">Программа курса</h1>
                     <p class="section-course-modal__content_description"></p>
                     <form class="section-course-modal__content_form">
                        <h2 class="section-course-modal__content_subtitle">Запишись на курс прямо сейчас</h2>
                        <p class="dn error-text"></p>
                        <input name="name" type="text" placeholder="Ваше имя..." class="light">
                        <input name="phone" type="tel" placeholder="+7" class="light" autocomplete="off">
                        <input name="course" type="hidden" value="Not Selected">
                        <input type="hidden" name="courseName">
                        <p class="record-modal__content_caution">
                           *Оставляя заявку, Вы даете согласие на обработку персональных данных
                        </p>
                        <button type="button" onclick="toSendRequest()" name="send" class="btn btn__rounded md">
                           Отправить
                        </button>
                     </form>
                  </div>
               </div>
            </div>
         </section>

         <!-- REF -->
         <section class="section section_light">
            <div class="section-discount container">
               <h1 class="section__title text-center title-md">
                  Позови друга и получи до
                  <span class="section__title_light">20% скидки</span>
                  от суммы покупки
               </h1>
            </div>
         </section>

         <!-- HOWTO -->
         <section class="section p-md">
            <div class="section container">
               <h1 class="section__title text-center">Как проходит обучение</h1>
               <p class="section__subtitle text-center" id="section-howto__subtitle"></p>
               <div class="section-howto__subtitles">
                  <p data-screen="lecture">
                     Живые лекции с лектором в онлайне, где каждый может задать вопрос и узнать много полезного
                  </p>
                  <p data-screen="practice">
                     Много практических материалов для закрепления полученной информации
                  </p>
                  <p data-screen="support">
                     Лайв встречи с тренерами, где идет разбор задач, техники для решения любых задач и просто онлайн общение/обсуждение разных тем
                  </p>
               </div>
               <div class="section-howto">
                  <div class="section-howto__btns">
                     <button class="section-howto__btn active" data-screen="lecture">Лекции</button>
                     <button class="section-howto__btn" data-screen="practice">Практика</button>
                     <button class="section-howto__btn" data-screen="support">Разбор задач</button>
                     <div class="section-howto__underline" id="section-howto-underline"></div>
                  </div>
                  <div class="section-howto__screens">
                     <div class="section-howto__slider" id="section-howto-slider">
                        <div class="section-howto__screen active" data-screen="lecture">
                           <img src="img/howto/lecture.png" alt="Лекции">
                        </div>
                        <div class="section-howto__screen" data-screen="practice">
                           <img src="img/howto/practice.png" alt="Практика">
                        </div>
                        <div class="section-howto__screen" data-screen="support">
                           <img src="img/howto/player.png" alt="Поддержка">
                        </div>
                     </div>
                     <button class="section-howto__btn-expand" data-toggle="modal" data-modal="section-howto-fullscreen"
                        data-modal-type="fullscreen-img">
                        <i class="icon-ui icon-ui__expand"></i>
                        <span class="section-howto__btn-expand_text">На весь экран</span>
                     </button>
                  </div>

                  <div id="section-howto-fullscreen" class="modal">
                     <button class="modal__btn close-btn">
                        <i class="icon-ui icon-ui__cross"></i>
                     </button>
                     <img class="section-howto-fullscreen__img modal-content" src="img/howto/lecture.png"
                        alt="Fullscreen Img">
                  </div>

               </div>
            </div>
         </section>

         <!-- UNIVERSITY -->
         <section class="section p-md">
            <div class="container section-uni">
               <div class="section-uni__content">
                  <h1 class="section-uni__title">
                     Для кого этот курс?
                  </h1>
                  <p class="section-uni__subtitle">
                     Мы подготовили программу курса схожую с академическим силлабусом университетов в Казахстане. Пройдя
                     курс, вы можете быть уверены в успешной сдаче экзаменов. В группы отбираются только студенты!
                  </p>
                  <div class="section-uni__img md">
                     <img src="img/bg-images/uni.png" alt="Touching Person">
                  </div>
                  <div class="section-uni__unis">
                     <h2 class="section-uni__unis_title">
                        Курс идеально подойдет для студентов
                     </h2>
                     <div class="section-uni__list">
                        <div class="section-uni__elem"><img src="img/uni/kbtu.png" alt="KBTU"></div>
                        <div class="section-uni__elem"><img src="img/uni/aitu.png" alt="AITU"></div>
                        <div class="section-uni__elem"><img src="img/uni/iitu.png" alt="IITU"></div>
                        <div class="section-uni__elem"><img src="img/uni/sdu.png" alt="SDU"></div>
                     </div>
                     <button class="btn btn__rounded lg mt-md" data-toggle="modal" data-modal="record">
                        Оставить заявку
                     </button>
                  </div>
               </div>
               <div class="section-uni__img">
                  <img src="img/bg-images/uni.png" alt="Touching Person">
               </div>
         </section>

         <section class="section p-md">
            <div class="container section-spoiler section__flex_center">
               <h1 class="section__title text-center">
                  Чему вы научитесь на курсе?
               </h1>
               <p class="section__subtitle text-center">
                  Выбрав любое из трех направлений, вы будете проходить следующие темы:
               </p>
               <div class="section-spoiler__list">

                  <div class="section-spoiler__elem">
                     <button class="section-spoiler__elem_title">
                        1. Основы программирования и базовый синтаксис
                     </button>
                     <p class="section-spoiler__elem_subtitle">
                        Начнем с полного нуля, разберем как пишутся алгоритмы, что происходит под капотом, как создаются
                        переменные и как вообще
                        изучить синтаксис языка
                     </p>
                  </div>

                  <div class="section-spoiler__elem ">
                     <button class="section-spoiler__elem_title">
                        2. Работа с условными операторами If-else
                     </button>
                     <p class="section-spoiler__elem_subtitle">
                        Улучшаем наш алгоритм. Добавим больше логики с помощью условных операторов. Расскажем как решать
                        сложные задачи и
                        сделаем мини-приложения с if-else
                     </p>
                  </div>

                  <div class="section-spoiler__elem ">
                     <button class="section-spoiler__elem_title">
                        3. Циклы, циклы, циклы
                     </button>
                     <p class="section-spoiler__elem_subtitle">
                        Самая “проблемная” тема многих новичков. Разберем циклы for,while do-while, чтобы вы полностью
                        поняли как они работают и
                        могли решать с помощью них любые задачи
                     </p>
                  </div>

                  <div class="section-spoiler__elem ">
                     <button class="section-spoiler__elem_title">
                        4. Строки, массивы и двумерные массивы
                     </button>
                     <p class="section-spoiler__elem_subtitle">
                        Как только вы поймете как работать с циклами, можно переходить к строкам и массивам. Разберем как
                        устроены массивы,
                        узнаем как использовать массивы в проектах и в задачах
                     </p>
                  </div>

                  <div class="section-spoiler__elem ">
                     <button class="section-spoiler__elem_title">
                        5. Функции(методы)
                     </button>
                     <p class="section-spoiler__elem_subtitle">
                        Научитесь писать собственные функции(методы) и использовать их на практике.
                     </p>
                  </div>

                  <div class="section-spoiler__elem ">
                     <button class="section-spoiler__elem_title">
                        6. Рекурсия, указатели и ссылки
                     </button>
                     <p class="section-spoiler__elem_subtitle">
                        Расставим все по полочкам в теме рекурсий и пойнтеров, в одних из сложных и проблемных темах для
                        новичков
                     </p>
                  </div>

                  <div class="section-spoiler__elem ">
                     <button class="section-spoiler__elem_title">
                        7. Алгоритмы и структуры данных
                     </button>
                     <p class="section-spoiler__elem_subtitle">
                        Расскажем о техниках решения задач, какие алгоритмы можно применять, и расскажем про структуры
                        данных
                     </p>
                  </div>

               </div>
            </div>
         </section>

         <!-- DESC -->
         <section class="section section_light section-discount">
            <div class="container abs section__flex_center">
               <h1 class="section__title text-center title-md">
                  Кто вас будет обучать?
               </h1>
               <p class="section__descr text-center">
                  Наши тренера - это <span class="red">действующие программисты</span>, которые работают над реальными
                  проектами. Помимо уроков
                  вы можете получить
                  много инсайтов о мире IT и не только
               </p>
               <button class="btn btn__rounded lg mt-md" data-toggle="modal" data-modal="record">
                  Хочу записаться
               </button>
               <div class="section-discount__img">
                  <img src="img/bg-images/emoji-eye.png" alt="Emoji One Eye Closed">
               </div>
            </div>
         </section>

         <!-- REVIEWS -->
         <section class="section p-md">
            <div class="section-reviews container ph-lg">
               <h1 class="section__title text-center">Отзывы студентов</h1>
               <div class="section-reviews__slider">

                  <div class="section-reviews__column">
                     <div class="section-reviews__elem">
                        <p class="section-reviews__elem_text">
                           Ранее я работал UX/UI дизайнером, и с самого 9 класса хотел уметь
                           программировать, и работать над крутыми проектами, и
                           BITLAB мне с этим помогли. После окончания учебы, я получил множество
                           предложении по работе. И на данный момент работаю
                           в айти компании Pillowz.kz, моя должность backend Python developer.
                        </p>
                        <div class="section-reviews__elem_person">
                           <div class="section-reviews__elem_info">
                              <h1 class="section-reviews__elem_name">Темирлан Зарлыков</h1>
                              <p class="section-reviews__elem_job">Разработчик Pillowz.kz</p>
                           </div>
                           <div class="section-reviews__elem_avatar">
                              <img src="img/avatars/temirlan-zarlykov.png" alt="Темирлан Зарлыков">
                           </div>
                        </div>
                     </div>

                     <div class="section-reviews__elem">
                        <p class="section-reviews__elem_text">
                           Очень благодарен тренерам BITLAB, ведь именно в этой команде очень интенсивно и разносторонне
                           обучали основным аспектам
                           программирования; создали фундамент, опираясь на который я с каждым днем уверенно продолжаю
                           развиваться; мне помогли
                           научиться мыслить как настоящий разработчик.
                        </p>
                        <div class="section-reviews__elem_person">
                           <div class="section-reviews__elem_info">
                              <h1 class="section-reviews__elem_name">Асылхан Райсханов</h1>
                              <p class="section-reviews__elem_job">iOS-разработчик «Колеса Крыша Маркет»</p>
                           </div>
                           <div class="section-reviews__elem_avatar">
                              <img src="img/avatars/asylkhan-raiskhanov.png" alt="Асылхан Райсханов">
                           </div>
                        </div>
                     </div>
                  </div>

                  <div class="section-reviews__column">
                     <div class="section-reviews__elem">
                        <p class="section-reviews__elem_text">
                           По окончанию курсов я получил несколько предложений о работе, и в данный момент я работаю
                           разработчиком ПО в Prime
                           Source. Я очень рад, что выбрал именно школу BITLAB, все что вам нужно, это жгучее желание,
                           во всем остальном
                           профессиональные преподаватели школы вам помогут!
                        </p>
                        <div class="section-reviews__elem_person">
                           <div class="section-reviews__elem_info">
                              <h1 class="section-reviews__elem_name">Искандер Сапиев</h1>
                              <p class="section-reviews__elem_job">Java разработчик Prime Source</p>
                           </div>
                           <div class="section-reviews__elem_avatar">
                              <img src="img/avatars/iskander-sapiev.png" alt="Искандер Сапиев">
                           </div>
                        </div>
                     </div>

                     <div class="section-reviews__elem">
                        <p class="section-reviews__elem_text">
                           Став частью команды BITLAB,
                           я получил не только очень крепкий фундамент и отличные знания, но и желание и мотивацию
                           развиваться и стать лучше,
                           которое не угасает по сей день. Я премного благодарен тренерам за знания, опыт и за ту самую
                           атмосферу, которая помогла
                           мне стать профессионалом в своей сфере.
                        </p>
                        <div class="section-reviews__elem_person">
                           <div class="section-reviews__elem_info">
                              <h1 class="section-reviews__elem_name">Мухаммед Иса</h1>
                              <p class="section-reviews__elem_job">
                                 Android разработчик Chocotravel холдинга ChocoFamily.
                              </p>
                           </div>
                           <div class="section-reviews__elem_avatar">
                              <img src="img/avatars/muhammed-isa.png" alt="Мухаммед Иса">
                           </div>
                        </div>
                     </div>
                  </div>

                  <div class="section-reviews__column">
                     <div class="section-reviews__elem">
                        <p class="section-reviews__elem_text">
                           Благодаря BITLAB я научился поднимать проекты, строить архитектуры, и просто писать код.
                           Самый главный навык который я
                           получил это мышление программиста. Это и поспособствовало тому, что уже через 2 месяца меня
                           взяли на работу.
                        </p>
                        <div class="section-reviews__elem_person">
                           <div class="section-reviews__elem_info">
                              <h1 class="section-reviews__elem_name">Айдын Мамырбаев</h1>
                              <p class="section-reviews__elem_job">Java разработчик АО "Сбербанк"</p>
                           </div>
                           <div class="section-reviews__elem_avatar">
                              <img src="img/avatars/aidyn-mamyrbaev.png" alt="Айдын Мамырбаев">
                           </div>
                        </div>
                     </div>

                     <div class="section-reviews__elem">
                        <p class="section-reviews__elem_text">
                           Я мечтал стать программистом, но не думал что поначалу будет так трудно. Во всем этом
                           разобраться мне помогли тренера
                           BITLAB. Интересные уроки, много хороших заданий и разного рода мотивация дали мне возможность
                           расширить свой багаж
                           знаний и понять, что программирование - это действительно моё.
                        </p>
                        <div class="section-reviews__elem_person">
                           <div class="section-reviews__elem_info">
                              <h1 class="section-reviews__elem_name">Рауан Султанбай</h1>
                              <p class="section-reviews__elem_job">Веб-разработчик TOO "Bilim Media Group".</p>
                           </div>
                           <div class="section-reviews__elem_avatar">
                              <img src="img/avatars/rauan-sultanbai.png" alt="Рауан Султанбай">
                           </div>
                        </div>
                     </div>
                  </div>

               </div>
            </div>
         </section>

         <!-- COMPANIES -->
         <section class="section p-lg">
            <div class="section-company container">
               <h1 class="section__title text-center">Где работают наши выпускники</h1>
               <div class="section-company__list">
                  <div class="section-company__elem"><img src="img/companies/tele2.png" alt="Tele 2"></div>
                  <div class="section-company__elem"><img src="img/companies/kase.png" alt="KASE"></div>
                  <div class="section-company__elem"><img src="img/companies/mersys.png" alt="MERSYS"></div>
                  <div class="section-company__elem"><img src="img/companies/dar.png" alt="DAR"></div>
                  <div class="section-company__elem"><img src="img/companies/kolesa.png" alt="КОЛЕСА КРЫША МАРКЕТ">
                  </div>
                  <div class="section-company__elem"><img src="img/companies/prime-source.png" alt="Prime Source"></div>
                  <div class="section-company__elem"><img src="img/companies/choco-family.png" alt="Choco Family"></div>
                  <div class="section-company__elem"><img src="img/companies/altyn.png" alt="Altyn I"></div>
                  <div class="section-company__elem"><img src="img/companies/aviata.png" alt="Aviata.kz"></div>
                  <div class="section-company__elem"><img src="img/companies/rg-brands.png" alt="RG Brands"></div>
                  <div class="section-company__elem"><img src="img/companies/alsi.png" alt="ALSI"></div>
                  <div class="section-company__elem"><img src="img/companies/kaspi.svg" alt="Kaspi"></div>
                  <div class="section-company__elem"><img src="img/companies/eurasian-bank.png" alt="Eurasian Bank">
                  </div>
               </div>
            </div>
         </section>

         <!-- FORM -->
         <section class="section p-sm">
            <div class="section-form container container__sm">
               <h1 class="section__title text-center">Оставь свои контакты и стань частью нашей семьи</h1>
               <form action="#" class="section-form__form">
                  <p class="dn error-text"></p>
                  <input name="name" type="text" placeholder="Ваше имя...">
                  <select name="course">
                     <option disabled selected>Выберите курс</option>
                     <option value="4">C++ basics</option>
                     <option value="3">Java basics</option>
                     <option value="2">Python basics</option>
                  </select>
                  <input name="phone" type="tel" placeholder="+7" autocomplete="off">
                  <p class="section-form__caution">
                     *Оставляя заявку, Вы даете согласие на обработку персональных данных
                  </p>
                  <button type="button" class="btn btn__rounded md" onclick="toSendRequest()" name="send">
                     Отправить
                  </button>
               </form>
            </div>
         </section>

         <!-- TRANERS -->
         <section class="section p-lg">
            <div class="section-trainers container">
               <h1 class="section__title text-center title-md">
                  Мы не просто школа программирования, мы академия с глобальной целью
                  <span class="section__title_mark">
                     стать фабрикой крутых программистов!
                  </span>
               </h1>
               <div class="section-trainers__list">
                  <div class="section-trainers__elem">
                     <div class="section-trainers__elem_avatar">
                        <img src="img/avatars/Ilyas.png" alt="Ильяс Жуанышев">
                     </div>
                     <h1 class="section-trainers__elem_name">Ильяс Жуанышев</h1>
                     <p class="section-trainers__elem_subjects">Java SE, Java EE, PHP</p>
                  </div>
                  <div class="section-trainers__elem">
                     <div class="section-trainers__elem_avatar">
                        <img src="img/avatars/Eldar.png" alt="Елдар Хасен">
                     </div>
                     <h1 class="section-trainers__elem_name">Елдар Хасен</h1>
                     <p class="section-trainers__elem_subjects">Java SE, Java EE, PHP, Laravel Framework</p>
                  </div>
                  <div class="section-trainers__elem">
                     <div class="section-trainers__elem_avatar">
                        <img src="img/avatars/asylkhan-aldanazar.png" alt="Асылхан Алданазар">
                     </div>
                     <h1 class="section-trainers__elem_name">Асылхан Алданазар</h1>
                     <p class="section-trainers__elem_subjects">Python, Django, Javascript, Java, C++</p>
                  </div>
               </div>
            </div>
         </section>

         <!-- PHRASE -->
         <section class="section p-md section-knowledge">
            <div class="section__flex_center container">
               <h1 class="section__title text-center title-md">Знания - это актив, который невозможно потерять.</h1>
               <button class="btn btn__rounded lg mt-md" data-toggle="modal" data-modal="record">
                  Оставить заявку
               </button>
            </div>
         </section>

         <!-- CONTACTS -->
         <section class="section p-lg">
            <div class="section-contacts container">
               <div class="section-contacts__info">
                  <h1 class="section__title">Наши контакты</h1>
                  <ul class="section-contacts__list">
                     <li class="section-contacts__elem">
                        <i class="icon icon-contacts icon-contacts__mail"></i>
                        <a href="mailto:bitlabacademy@gmail.com">bitlabacademy@gmail.com</a>
                     </li>
                     <li class="section-contacts__elem">
                        <i class="icon icon-contacts icon-contacts__phone"></i>
                        <a href="tel:77479822311">+7 (747) 982 23 11</a>
                     </li>
                     <li class="section-contacts__elem">
                        <i class="icon icon-contacts icon-contacts__phone"></i>
                        <a href="tel:77000700101">+7 (700) 070 01 01</a>
                     </li>
                     <li class="section-contacts__elem">
                        <i class="icon icon-contacts icon-contacts__location"></i>
                        г. Алматы, ул.Айманова 126, 6-ой этаж
                     </li>
                  </ul>
               </div>
               <div class="section-contacts__map">
                  <img src="img/map.png" alt="Map">
               </div>
            </div>
         </section>

      </main>
      <footer class="footer">
         <div class="footer__content container">
            <div class="footer__content_logo"><img src="img/logo-dark.svg" alt="Logo"></div>
            <ul class="footer__content_list">
               <li class="footer__content_elem">&copy; 2020</li>
               <li class="footer__content_elem">
                  <a href="#" data-toggle="modal" data-modal="record">Связаться с нами</a>
               </li>
               <li class="footer__content_elem">
               <a href="https://drive.google.com/file/d/1yao4aGeaO1wZoEoM1hzihRLEITVtP-f4/view?usp=sharing" target="blank">Публичный договор-оферта></a>
               </li>
            </ul>
            <ul class="footer__content_social">
               <li class="footer__content_sn">
                  <a href="https://www.instagram.com/bitlabacademy/"><i class="icon-social icon-social__instagram"></i></a>
               </li>
               <li class="footer__content_sn">
                  <a href="https://www.facebook.com/bitlab.kz/"><i class="icon-social icon-social__facebook"></i></a>
               </li>
               <li class="footer__content_sn">
                  <a href="https://t.me/eldarkhasen"><i class="icon-social icon-social__telegram"></i></a>
               </li>
            </ul>
         </div>
      </footer>
   </div>
   <script src="js/jquery-3.5.1.min.js"></script>
   <script src="js/jquery.maskedinput.min.js"></script>
   <script src="js/slick.min.js"></script>
   <script src="js/app.min.js"></script>
   <!-- Yandex.Metrika counter -->
   <script type="text/javascript" >
      (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
         m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
      (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

      ym(69096853, "init", {
         clickmap:true,
         trackLinks:true,
         accurateTrackBounce:true,
         webvisor:true
      });
   </script>
   <noscript><div><img src="https://mc.yandex.ru/watch/69096853" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
   <!-- /Yandex.Metrika counter -->
</body>

</html>
