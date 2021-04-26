@extends('employer.layouts.app')
@section('user')

<div class="row">
    <div class="col-lg-12">
        <div class="breadcrumb-content d-flex flex-wrap justify-content-between align-items-center">
            <div class="section-heading">
                <h2 class="sec__title">Messages</h2>
            </div><!-- end section-heading -->
            <ul class="list-items d-flex align-items-center">
                <li class="active__list-item"><a href="#">Home</a></li>
                <li class="active__list-item"><a href="#">Dashboard</a></li>
                <li>Messages</li>
            </ul>
        </div><!-- end breadcrumb-content -->
    </div><!-- end col-lg-12 -->
</div><!-- end row -->

<div class="row mt-5">
    <div class="col">
        <div class="dashboard-message-wrapper d-flex">
            <div class="message-sidebar">
                <div class="message-search">
                    <div class="contact-form-action">
                        <form action="#">
                            <div class="form-group mb-0">
                                <input class="form-control" type="text" placeholder="Search...">
                                <button type="submit" class="submit-btn "><i class="la la-search"></i></button>
                            </div>
                        </form>
                    </div>
                </div><!-- message-search -->
                <div class="message-inbox-item">
                    <div class="mess__body">
                        <a href="#" class=" d-block message-inbox message-active">
                            <div class="mess__item">
                                <div class="avatar dot-status online-status">
                                    <img src="images/small-team1.jpg" alt="Michelle Moreno">
                                </div>
                                <div class="content">
                                    <h4 class="widget-title">Daniel Hardman</h4>
                                    <p class="text">How the hell am I supposed to get a jury to believe you when I am not even sure that I do</p>
                                    <span class="time color-text-3 font-size-12">5 min ago</span>
                                </div>
                            </div>
                        </a>
                        <a href="#" class=" d-block message-inbox">
                            <div class="mess__item">
                                <div class="avatar dot-status">
                                    <img src="images/small-team2.jpg" alt="Michelle Moreno">
                                </div>
                                <div class="content">
                                    <h4 class="widget-title">Michelle Moreno</h4>
                                    <p class="text">John, I know everything!</p>
                                    <span class="time color-text-3 font-size-12">Yesterday</span>
                                </div>
                            </div>
                        </a>
                        <a href="#" class=" d-block message-inbox">
                            <div class="mess__item">
                                <div class="avatar dot-status online-status">
                                    <img src="images/small-team3.jpg" alt="Michelle Moreno">
                                </div>
                                <div class="content">
                                    <h4 class="widget-title">Charles Forstman <span class="badge badge-success radius-rounded margin-top-10px p-1 float-right">2</span></h4>
                                    <p class="text">Thanks Mike! :)</p>
                                    <span class="time color-text-3 font-size-12">1:55 PM</span>
                                </div>
                            </div>
                        </a>
                        <a href="#" class=" d-block message-inbox">
                            <div class="mess__item">
                                <div class="avatar dot-status">
                                    <img src="images/small-team4.jpg" alt="Michelle Moreno">
                                </div>
                                <div class="content">
                                    <h4 class="widget-title">Rachel Zane</h4>
                                    <p class="text">I've sent you the files for the Garrett trial</p>
                                    <span class="time color-text-3 font-size-12">1 hour ago</span>
                                </div>
                            </div>
                        </a>
                        <a href="#" class=" d-block message-inbox">
                            <div class="mess__item">
                                <div class="avatar dot-status">
                                    <img src="images/small-team5.jpg" alt="Michelle Moreno">
                                </div>
                                <div class="content">
                                    <h4 class="widget-title">Rock William</h4>
                                    <p class="text">Payment Received?</p>
                                    <span class="time color-text-3 font-size-12">Today</span>
                                </div>
                            </div>
                        </a>
                        <a href="#" class=" d-block message-inbox">
                            <div class="mess__item">
                                <div class="avatar dot-status">
                                    <img src="images/small-team6.jpg" alt="Michelle Moreno">
                                </div>
                                <div class="content">
                                    <h4 class="widget-title">Harvey Specter</h4>
                                    <p class="text">Oh yeah, did Michael Jordan tell you that?</p>
                                    <span class="time color-text-3 font-size-12">2 days ago</span>
                                </div>
                            </div>
                        </a>
                    </div><!-- end mess__body -->
                    <div class="msg-action-bar d-flex justify-content-between align-items-centerbg-light">
                        <a href="#"><i class="la la-user-plus"></i> <span>Add Contact</span></a>
                        <a href="#"><i class="la la-cog"></i> <span>Settings</span></a>
                    </div><!-- end msg-action-bar -->
                </div><!-- end message-inbox-item -->
            </div><!-- message-sidebar -->
            <div class="message-content flex-grow-1">
                <div class="message-header">
                    <div class="mess__item justify-content-between align-items-center">
                        <div class="d-flex">
                            <div class="avatar">
                                <img src="images/small-team1.jpg" alt="Michelle Moreno">
                            </div>
                            <div class="content">
                                <h4 class="widget-title font-size-15 mb-0">Daniel Hardman</h4>
                                <span class="time color-text font-size-14">Online</span>
                            </div>
                        </div>
                        <div>
                            <ul class="info-list">
                                <li><a href="#"><i class="la la-trash" data-toggle="tooltip" data-placement="top" title="Delete Conversation"></i></a></li>
                            </ul>
                        </div>
                    </div><!-- mess__item -->
                </div><!-- message-header -->
                <div class="conversation-wrap">
                    <div class="conversation-box">
                        <div class="message-time">
                            <span>30 Jan, 2020</span>
                        </div>
                        <div class="conversation-item msg-sent">
                            <div class="mess__body">
                                <div class="mess__item">
                                    <div class="content">
                                        <p class="text">How the hell am I supposed to get a jury to believe you when I am not even sure that I do? 😒</p>
                                        <span class="time">11:44 AM <i class="fa fa-check"></i></span>
                                    </div>
                                    <div class="avatar">
                                        <img src="images/small-team1.jpg" alt="Michelle Moreno">
                                    </div>
                                </div><!-- mess__item -->
                            </div><!-- mess__body -->
                        </div><!-- conversation-item -->
                         <div class="conversation-item msg-reply">
                             <div class="mess__body">
                                 <div class="mess__item">
                                     <div class="avatar">
                                         <img src="images/small-team2.jpg" alt="Michelle Moreno">
                                     </div>
                                     <div class="content">
                                         <p class="text">When you're backed against the wall, break the god damn thing down.</p>
                                         <span class="time">11:46 AM</span>
                                     </div>
                                 </div><!-- mess__item -->
                             </div><!-- mess__body -->
                        </div><!-- conversation-item -->
                        <div class="conversation-item msg-reply">
                             <div class="mess__body">
                                 <div class="mess__item">
                                     <div class="avatar">
                                         <img src="images/small-team2.jpg" alt="Michelle Moreno">
                                     </div>
                                     <div class="content">
                                         <p class="text">Excuses don't win championships. 😐</p>
                                         <span class="time">12:01 PM</span>
                                     </div>
                                 </div><!-- mess__item -->
                             </div><!-- mess__body -->
                        </div><!-- conversation-item -->
                        <div class="message-time">
                            <span>Yesterday</span>
                        </div>
                        <div class="conversation-item msg-sent">
                            <div class="mess__body">
                                <div class="mess__item">
                                    <div class="content">
                                        <p class="text">Oh yeah, you said right 👍</p>
                                        <span class="time">12:4 PM <i class="fa fa-check"></i></span>
                                    </div>
                                    <div class="avatar">
                                        <img src="images/small-team1.jpg" alt="Michelle Moreno">
                                    </div>
                                </div><!-- mess__item -->
                            </div><!-- mess__body -->
                        </div><!-- conversation-item -->
                        <div class="conversation-item msg-reply">
                            <div class="mess__body">
                                <div class="mess__item">
                                    <div class="avatar">
                                        <img src="images/small-team2.jpg" alt="Michelle Moreno">
                                    </div>
                                    <div class="content">
                                        <p class="text">Anyway! when i will start working on your project 😎😎😎</p>
                                        <span class="time">12:07 PM</span>
                                    </div>
                                </div><!-- mess__item -->
                            </div><!-- mess__body -->
                        </div><!-- conversation-item -->
                        <div class="conversation-item msg-sent">
                            <div class="mess__body">
                                <div class="mess__item">
                                    <div class="content">
                                        <p class="text">You can start working on project tomorrow 🙂</p>
                                        <span class="time">12:4 PM <i class="fa fa-check"></i></span>
                                    </div>
                                    <div class="avatar">
                                        <img src="images/small-team1.jpg" alt="Michelle Moreno">
                                    </div>
                                </div><!-- mess__item -->
                            </div><!-- mess__body -->
                        </div><!-- conversation-item -->
                        <div class="conversation-item msg-reply">
                            <div class="mess__body">
                                <div class="mess__item">
                                    <div class="avatar">
                                        <img src="images/small-team2.jpg" alt="Michelle Moreno">
                                    </div>
                                    <div class="content">
                                        <p class="text">Ok, i will 😉</p>
                                        <span class="time">12:07 PM</span>
                                    </div>
                                </div><!-- mess__item -->
                            </div><!-- mess__body -->
                        </div><!-- conversation-item -->
                        <div class="message-time">
                            <span>Today</span>
                        </div>
                        <div class="conversation-item msg-reply">
                            <div class="mess__body">
                                <div class="mess__item">
                                    <div class="avatar">
                                        <img src="images/small-team2.jpg" alt="Michelle Moreno">
                                    </div>
                                    <div class="content">
                                        <p class="text">Hi John, I just wanted to let you know that project is finished</p>
                                        <span class="time">8:19 AM</span>
                                    </div>
                                </div><!-- mess__item -->
                            </div><!-- mess__body -->
                        </div><!-- conversation-item -->
                        <div class="conversation-item msg-sent">
                            <div class="mess__body">
                                <div class="mess__item">
                                    <div class="content">
                                        <p class="text">Hi Daniel! I'm actually on vacation 🏖️ until Sunday so I can't check it now 😎</p>
                                        <span class="time">12:4 PM <i class="fa fa-check"></i></span>
                                    </div>
                                    <div class="avatar">
                                        <img src="images/small-team1.jpg" alt="Michelle Moreno">
                                    </div>
                                </div><!-- mess__item -->
                            </div><!-- mess__body -->
                        </div><!-- conversation-item -->
                        <div class="conversation-item msg-reply">
                            <div class="mess__body">
                                <div class="mess__item">
                                    <div class="avatar">
                                        <img src="images/small-team2.jpg" alt="Michelle Moreno">
                                    </div>
                                    <div class="content msg-typing">
                                        <p class="text">Typing</p>
                                        <div class="typing-director">
                                            <span></span>
                                            <span></span>
                                            <span></span>
                                        </div>
                                    </div>
                                </div><!-- mess__item -->
                            </div><!-- mess__body -->
                        </div><!-- conversation-item -->
                    </div><!-- conversation-box -->
                </div><!-- conversation-wrap -->
                <div class="message-reply-input">
                    <div class="contact-form-action">
                        <form method="post">
                            <div class="input-box d-flex align-items-center">
                                <div class="form-group flex-grow-1 mb-0">
                                    <textarea class="message-control form-control mr-2" name="message" placeholder="Type a message" data-emojiable="true"></textarea>
                                    <button type="submit" class="theme-btn submit-btn border-0">
                                        <span class="la la-paper-plane"></span>
                                    </button>
                                </div>
                                <div class="msg-action-wrap">
                                    <div class="dropdown">
                                        <button class="dropdown-toggle send-file icon-element" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="la la-paperclip"></i>
                                        </button>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                            <a class="dropdown-item" href="#" data-toggle="tooltip" data-placement="top" title="File"><i class="la la-file icon-element"></i></a>
                                            <a class="dropdown-item" href="#" data-toggle="tooltip" data-placement="top" title="Camera"><i class="la la-camera icon-element"></i></a>
                                            <a class="dropdown-item" href="#" data-toggle="tooltip" data-placement="top" title="Photo"><i class="la la-photo icon-element"></i></a>
                                            <a class="dropdown-item" href="#" data-toggle="tooltip" data-placement="top" title="Audio"><i class="la la-music icon-element"></i></a>
                                            <a class="dropdown-item" href="#" data-toggle="tooltip" data-placement="top" title="Video"><i class="la la-video icon-element"></i></a>
                                            <a class="dropdown-item" href="#" data-toggle="tooltip" data-placement="top" title="Location"><i class="la la-map icon-element"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- input-box -->
                        </form>
                    </div><!-- end contact-form-action -->
                </div><!-- message-reply-input -->
            </div><!-- message-content -->
        </div><!-- end dashboard-message-wrapper -->
    </div><!-- end col -->
</div><!-- end row -->
@endsection