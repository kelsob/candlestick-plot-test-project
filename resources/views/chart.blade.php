<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Financial Chart</title>
    <script src="https://cdn.jsdelivr.net/npm/luxon@3.4.4"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@4.4.1/dist/chart.umd.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chartjs-adapter-luxon@1.3.1"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chartjs-adapter-date-fns"></script>
    <script src="https://cdn.jsdelivr.net/npm/chartjs-chart-financial"></script>
    <link rel="icon" href="./favicon.ico"/>
</head>
<body>
    <canvas id="chart" width="400" height="400"></canvas>
    <script type="text/javascript" src="{{ asset('docs/index.js') }}"></script>
</body>
</html>
