<?php
include_once 'script1.php';
$categories = getCategoriesList(); ?>
<head>
<title>Form</title>
<script src="/js/jquery-3.3.1.min.js"></script>
<script src="/js/main.js"></script>
</head>
<body style="text-align: center">
<h2>Assignment</h2>
<form>
    <label for="select1">Call-center:<label/>
    <select id="select1">
        <option disabled selected value>Select Center</option>
        <?php foreach ($categories as $categoryItem): ?>
        <option value="<?php echo $categoryItem['id']; ?>"><?php echo $categoryItem['name']; ?></option>
        <?php endforeach; ?>
    </select>

    <br/>

    <label for="select2">Desk:<label/>
    <select id="select2">
        <option disabled selected value>Select Desk</option>
    </select>

    <br/>

    <label for="select3">Team:</label>
    <select id="select3">
        <option disabled selected value>Select Team</option>
    </select>

    <br/>

    <label for="select4">Sales:</label>
    <select id="select4">
        <option disabled selected value>Select Sales</option>
    </select>
</form>
</body>
