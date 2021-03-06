<?php
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Document</title>
    <link
      rel="stylesheet"
      href="https://use.fontawesome.com/releases/v5.8.2/css/all.css"
      integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="./build/css/analysis.css" />
    <link rel="stylesheet" href="./build/sprite.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js"></script>
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> -->
    <!-- <script src="https://cdn.zingchart.com/zingchart.min.js"></script>
    <script>
      zingchart.MODULESDIR = "https://cdn.zingchart.com/modules/";
      ZC.LICENSE = [
        "569d52cefae586f634c54f86dc99e6a9",
        "ee6b7db5b51705a13dc2339db3edaf6d"
      ];
    </script> -->
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
                  <span class="featureName">粉絲變化圖</span>
                  <span class="icon icon-date"></span>
                </a>
              </li>
              <li class="featureListsli">
                <a href="./postAnalysis.html">
                  <span class="featureName">個別貼文分析</span>
                  <span class="icon icon-ad"></span>
                </a>
              </li>
              <li class="featureListsli isActive">
                <a href="./analysis.html">
                  <span class="featureName">競爭者交叉分析</span>
                  <span class="icon icon-cross_list"></span>
                </a>
              </li>
            </ul>
          </div>
        </div>
        <!-- 左邊sideBar -->
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
          <!-- 上方header -->
          <!-- 下方content -->
          <div class="container content">
            <!-- 第一列row 選擇粉絲專業 -->
            <div class="row">
              <div class="col-md-12">
                <div class="fansBox BoxDiff">
                  <div class="fansBoxTitle col-md-4">
                    <h5>選擇粉絲專頁</h5>
                  </div>
                  <div class="checkBoxGroup col-md-8">
                    <li>
                      <input type="checkbox" value="韓國瑜" checked />韓國瑜
                    </li>
                    <li><input type="checkbox" value="賴清德" />賴清德</li>
                    <li><input type="checkbox" value="郭台銘" />郭台銘</li>
                  </div>
                </div>
              </div>
            </div>
            <!-- 第二列row 粉絲比例圖、粉絲重疊數、假帳號重疊數 -->
            <div class="row">
              <div class="col-md-4">
                <div class="fansBox">
                  <div class="fansBoxTitle">
                    <h5>粉絲比例圖</h5>
                  </div>
                  <div class="fansBoxChart">
                    <!-- <div id="myChart"></div> -->
                    <canvas id="fansDoughnut" width="300" height="300"></canvas>
                  </div>
                </div>
              </div>
              <div class="col-md-4">
                <div class="fansBox">
                  <div class="fansBoxTitle">
                    <h5>粉絲重疊</h5>
                  </div>
                  <div class="fansBoxChart">
                    <h1 id="fansOverlap">5010</h1>
                    <h6>個帳號重疊</h6>
                  </div>
                </div>
              </div>
              <div class="col-md-4">
                <div class="fansBox">
                  <div class="fansBoxTitle">
                    <h5>假帳號重疊</h5>
                  </div>
                  <div class="fansBoxChart">
                    <h1 id="fakeAccount">420</h1>
                    <h6>個假帳號重疊</h6>
                  </div>
                </div>
              </div>
            </div>
            <!-- 第三列row 異常帳號、粉專影響力 -->
            <div class="row">
              <div class="col-md-6">
                <div class="fansBox">
                  <div class="fansBoxTitle">
                    <h5>異常帳號</h5>
                  </div>
                  <div class="fansBoxChart">
                    <table>
                      <thead>
                        <tr>
                          <th>帳號名稱</th>
                          <th>單篇留言數</th>
                          <th>#Tag</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>陳思瑋</td>
                          <td>20則</td>
                          <td>#Tag</td>
                        </tr>
                        <tr>
                          <td>張桂華</td>
                          <td>10則</td>
                          <td>#Tag</td>
                        </tr>
                        <tr>
                          <td>江政侑</td>
                          <td>3則</td>
                          <td>#Tag</td>
                        </tr>
                        <tr>
                          <td>藍莉瑄</td>
                          <td>5則</td>
                          <td>#Tag</td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="fansBox">
                  <div class="fansBoxTitle">
                    <h5>粉專影響力</h5>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- 右邊main -->
    <script src="./build/js/venders.min.js"></script>
    <script src="./build/js/analysis.js"></script>
  </body>

  <script>
    (function($) {
      $(".checkBoxGroup li input").on("click", function() {
        if ($(this).prop("checked")) {
          $(".checkBoxGroup li input:checkbox").prop("checked", false);
          $(this).prop("checked", true);
        }
        var personValue = $(this).val();
        var fansOverlap = 0;
        var fakeAccount = 0;
        var Data = 0;
        var Data1 = 0;
        if (personValue == "韓國瑜") {
          console.log("韓國瑜");
          fansOverlap = 5010;
          fakeAccount = 420;
          Data = 60;
          Data1 = 40;
        } else if (personValue == "賴清德") {
          console.log("賴清德");
          fansOverlap = 6010;
          fakeAccount = 380;
        } else {
          console.log("郭台銘");
          fansOverlap = 4010;
          fakeAccount = 520;
        }
        $("#fansOverlap").text(fansOverlap);
        $("#fakeAccount").text(fakeAccount);
      });
    })($);
  </script>
</html>
?>