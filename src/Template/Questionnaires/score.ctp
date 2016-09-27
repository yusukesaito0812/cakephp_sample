<div id="content">
    <div class="row">
        <div class="columns large-12 intro">
            <h2 class="notification">
                あなたの診断結果は...
            </h2>
        </div>
        <div class="columns col-md-7">
            <canvas id="radarChart" width="600" height="400"></canvas>
                <script>
                var data = {
                    labels: <?php echo "['".implode("','", h($category_list) )."']"; ?>,
                    datasets: [
                        {
                            label: "あなたの診断結果は...",
                            backgroundColor: "rgba(179,181,198,0.2)",
                            borderColor: "rgba(179,181,198,1)",
                            //最大値の点の設定
                            pointBackgroundColor: "rgba(179,181,198,1)",
                            pointBorderColor: "#fff",
                            pointHoverBackgroundColor: "#fff",
                            pointHoverBorderColor: "rgba(179,181,198,1)",
                            //データの値
                            data:<?php echo '['.implode(",", h($point_list) )."]"; ?>
                        }
                    ]
                };
                var ctx = document.getElementById("radarChart").getContext("2d");
                new Chart(ctx, {
                    type: "radar",
                    data: data,
                    options: {
                            legend: {
                                display: false
                            },
                            scale: {
                                //書式
                                pointLabels:{
                                    fontColor:"#fcafa5",
                                    fontFamily:"Lato, Helvetica, Arial, sans-serif",
                                    fontSize:20,
                                    fontStyle:"bold",
                                },
                                //グラフ形式
                                ticks: {
                                    beginAtZero: true,
                                    min:0,
                                    max:5,
                                    stepSize:1
                                }
                            }
                    }
                });
            </script>
        </div>
        
        <div class="columns col-md-6">
        </div>
    </div>
</div>