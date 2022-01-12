@extends('layouts.users')
@section('content')
    <div id="container">
        <div class="container-fluid" style="width: 90%">
            <ul class="breadcrumb">
                <li><a href="index.html"><i class="fa fa-home"></i></a></li>
                <li><a href="category.html">پروفایل </a></li>
            </ul>
            <!--Left Part Start -->
            <!--Left Part End -->
            <!--Middle Part Start-->
            <div id="content" >
                <div class="sdr2">
                    <h1>پروفایل شما </h1>
                    <div class="ps2 anm">
                        <div class="pcnt">
                            <div class="center">
                                <div class="row">
                                    <div class="col-md-7">
                                        <table class="profileTable" align="center">
                                            <thead style="border-bottom: 1px solid rgb(31, 31, 31);">
                                            <tr class="profileTRstyle">
                                                <th class="profileTicket">نام کاربری :</th>
                                                <th class="profileTicket">FatemehSG</th>
                                            </tr>
                                            <tr class="profileTRstyle">
                                                <th class="profileTicket">نام و نام خانوادگی :</th>
                                                <th class="profileTicket">فاطمه غلام زاده</th>
                                            </tr>
                                            <tr class="profileTRstyle">
                                                <th class="profileTicket">آدرس ایمیل : </th>
                                                <th class="profileTicket">fatemeh@gmail.com</th>
                                            </tr>
                                            <tr class="profileTRstyle">
                                                <th class="profileTicket">تلفن : </th>
                                                <th class="profileTicket">09134307633</th>
                                            </tr>
                                            <tr class="profileTRstyle">
                                                <th class="profileTicket">استان : </th>
                                                <th class="profileTicket">اصفهان </th>
                                            </tr>
                                            <tr class="profileTRstyle">
                                                <th class="profileTicket">شهر : </th>
                                                <th class="profileTicket">کاشان</th>
                                            </tr>
                                            </thead>
                                        </table>
                                    </div>
                                    <img src="image/profile.jpg" class="col-md-5 center profileImage">
                                    <br>
                                    <br>
                                </div>
                                <!--this is table of information-->
                                <!--end of table of information-->

                                <!--Tickets-->

                                <div>
                                    <br>
                                    <br>
                                    <br>
                                    <br>
                                    <p class="profileEXE">بلیط های رزرو شده :  </p>
                                    <br>
                                    <br>
                                    <br>

                                </div>



                                <div>
                                    <table class="profileTable">
                                        <thead style="border-bottom: 1px solid rgb(124, 124, 124);">
                                        <tr style="border-bottom: 2px solid rgb(199, 199, 199); color: rgba(0, 0, 0, 0.87); height: 48px;">
                                            <th class="profileTicket">
                                                <!-- react-text: 279 -->نام<!-- /react-text -->
                                            </th>
                                            <th class="profileTicket">
                                                تاریخ / ساعت
                                            </th>
                                            <th class="profileTicket">
                                                <!-- react-text: 281 -->محل برگزاری<!-- /react-text -->
                                            </th>
                                            <th class="profileTicket">
                                                قیمت بلیط
                                            </th>
                                        </tr>
                                        </thead>
                                    </table>
                                </div>
                                <div style="height: inherit; overflow: hidden auto;">
                                    <table class="profileTable">
                                        <tbody>
                                        <tr style="border-bottom: 1px solid rgb(224, 224, 224); color: rgba(0, 0, 0, 0.87); height: 48px;">
                                            <td class="profileTicket">
                                                <p>کنسرت بهنام بانی</p>
                                            </td>
                                            <td class="profileTicket">
                                                <div>
                                                    <span>8 مرداد 1398 / 17:00</span>
                                                </div>
                                            </td>
                                            <td class="profileTicket">
                                                <!-- react-empty: 293 -->
                                                <p>برج میلاد</p>
                                            </td>
                                            <td class="profileTicket">
                                                <p>1800000 ریال</p>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <br>
                                <br>
                                <br>
                                <br>
                                <a href="concert_upload.html">
                                    <button  align="left" class="ptofileButton" onClick="">ثبت کنسرت </button>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="psdown">
        </div>
    </div>
    @endsection