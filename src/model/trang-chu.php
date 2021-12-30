<!-- <head>
    <meta charset="utf-8">
    <title>CKEditor</title>
    <script src="https://cdn.ckeditor.com/4.16.2/standard/ckeditor.js"></script>
    <script src="<?php echo BASE_URL ?>/public/ckfinder/ckfinder.js"></script>

</head>

<body>
    <input id="ckfinder-input" type="text" style="width:60%">
    <button id="ckfinder-modal" class="button-a button-a-background">Browse Server</button>
    <image src="" id="image" />
    <script>
        var button = document.getElementById('ckfinder-modal');
        var image = document.getElementById('image');

        button.onclick = function() {
            CKFinder.modal({
                chooseFiles: true,
                width: 800,
                height: 600,
                onInit: function(finder) {
                    finder.on('files:choose', function(evt) {
                        var file = evt.data.files.first();
                        var output = document.getElementById('output');
                        output.innerHTML = 'Selected: ' + escapeHtml(file.get('name')) + '<br>URL: ' + escapeHtml(file.getUrl());
                    });

                    finder.on('file:choose:resizedImage', function(evt) {
                        var output = document.getElementById('output');
                        output.innerHTML = 'Selected resized image: ' + escapeHtml(evt.data.file.get('name')) + '<br>url: ' + escapeHtml(evt.data.resizedUrl);
                    });
                }
            });
        };

        var button1 = document.getElementById('ckfinder-modal');

        button1.onclick = function() {
            selectFileWithCKFinder('ckfinder-input');
        };

        function selectFileWithCKFinder(elementId) {
            CKFinder.modal({
                chooseFiles: true,
                width: 800,
                height: 600,
                onInit: function(finder) {
                    finder.on('files:choose', function(evt) {
                        var file = evt.data.files.first();
                        var output = document.getElementById(elementId);
                        output.value = file.getUrl();
                        image.src = output.value;
                    });

                    finder.on('file:choose:resizedImage', function(evt) {
                        var output = document.getElementById(elementId);
                        output.value = evt.data.resizedUrl;
                    });
                }
            });
        }
    </script>
</body> -->

<head>
    <meta charset="utf-8">
    <title>CKEditor</title>
    <script src="https://cdn.ckeditor.com/4.16.2/standard/ckeditor.js"></script>
    <script src="<?php echo BASE_URL ?>/public/ckfinder/ckfinder.js"></script>
</head>

<body>
    <form action="">
        <textarea name="ckeditor"></textarea>
        <input type="submit">
    </form>
    <script>
        const ckeditor = CKEDITOR.replace('ckeditor');
        CKFinder.setupCKEditor(ckeditor);
    </script>
    <input id="ckfinder-input" type="text" style="width:60%">
    <button id="ckfinder-modal" class="button-a button-a-background">Browse Server</button>
    <image src="" id="image" />
    <script>
        var button = document.getElementById('ckfinder-modal');
        var image = document.getElementById('image');

        button.onclick = function() {
            CKFinder.modal({
                chooseFiles: true,
                width: 800,
                height: 600,
                onInit: function(finder) {
                    finder.on('files:choose', function(evt) {
                        var file = evt.data.files.first();
                        var output = document.getElementById('output');
                        output.innerHTML = 'Selected: ' + escapeHtml(file.get('name')) + '<br>URL: ' + escapeHtml(file.getUrl());
                    });

                    finder.on('file:choose:resizedImage', function(evt) {
                        var output = document.getElementById('output');
                        output.innerHTML = 'Selected resized image: ' + escapeHtml(evt.data.file.get('name')) + '<br>url: ' + escapeHtml(evt.data.resizedUrl);
                    });
                }
            });
        };

        var button1 = document.getElementById('ckfinder-modal');

        button1.onclick = function() {
            selectFileWithCKFinder('ckfinder-input');
        };

        function selectFileWithCKFinder(elementId) {
            CKFinder.modal({
                chooseFiles: true,
                width: 800,
                height: 600,
                onInit: function(finder) {
                    finder.on('files:choose', function(evt) {
                        var file = evt.data.files.first();
                        var output = document.getElementById(elementId);
                        output.value = file.getUrl();
                        image.src = output.value;
                    });

                    finder.on('file:choose:resizedImage', function(evt) {
                        var output = document.getElementById(elementId);
                        output.value = evt.data.resizedUrl;
                    });
                }
            });
        }
    </script>
</body>