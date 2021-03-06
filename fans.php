<?php
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Document</title>
    <link rel="stylesheet" href="./build/css/fans.css" />
    <link rel="stylesheet" href="./build/sprite.css" />
    <link
      rel="stylesheet"
      href="https://use.fontawesome.com/releases/v5.8.2/css/all.css"
      integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay"
      crossorigin="anonymous"
    />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/d3/5.9.1/d3.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/d3-cloud/1.2.4/d3.layout.cloud.min.js"></script>
  </head>
  <body>
    <div class="container-fluid wrapper">
      <div class="row">
        <!-- 左邊sideBar -->
        <div class="col-md-2" id="sideBar">
          <!-- 上方頭貼部分 -->
          <div id="userProfile">
            <div id="userProfileBox">
              <div id="userPhoto">
                <img src="./build/images/head.jpg" alt="" />
              </div>
              <div id="userIM">
                <span class="userName">蔡英文</span>

                <span class="userlevel"
                  ><i class="fas fa-crown"></i>高級會員</span
                >
              </div>
            </div>
          </div>
          <!-- 下方功能列表 -->
          <div id="featureLists">
            <ul id="featureListsUl">
              <li class="featureListsli">
                <a href="./index.html">
                  <span class="featureName">儀錶板</span>
                  <span class="icon icon-dashboard"></span>
                </a>
              </li>
              <li class="featureListsli">
                <a href="./fans.html">
                  <span class="featureName isActive">粉絲變化圖</span>
                  <span class="icon icon-date"></span>
                </a>
              </li>
              <li class="featureListsli">
                <a href="./postAnalysis.html">
                  <span class="featureName">個別貼文分析</span>
                  <span class="icon icon-ad"></span>
                </a>
              </li>
              <li class="featureListsli">
                <a href="./analysis.html">
                  <span class="featureName">競爭者交叉分析</span>
                  <span class="icon icon-cross_list"></span>
                </a>
              </li>
            </ul>
          </div>
        </div>
        <!-- 右邊main -->
        <div class="col-md-10" id="main">
          <!-- 上方header -->
          <div class="row header">
            <div class="col-md-11">
              <div id="headerLogo">
                <h2>Hey!Fans</h2>
              </div>
            </div>
            <div id="haederNotice" class="col-md-1">
              <span class="icon icon-notice"></span>
            </div>
          </div>
          <!-- 下方content -->
          <div class="container content">

          </div>
        </div>
      </div>
    </div>
    <script src="./build/js/venders.min.js"></script>
    <script src="./build/js/fans.js"></script>
  </body>

  <!-- <script>
    (function($) {
      console.log("read");
      $("#userProfile").on("click", function() {
        console.log("userProfiledd");
        $("#sideBar").toggleClass("col-md-2");
        $("#main").toggleClass("col-md-10");
        $("#sideBar").toggleClass("col-md-1");
        $("#main").toggleClass("col-md-11");
      });
    })($);
  </script> -->
</html>
?>