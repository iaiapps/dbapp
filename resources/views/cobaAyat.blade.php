<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://fonts.googleapis.com/css?family=Dosis|Open+Sans+Condensed:300" rel="stylesheet">
    <style>
        .containerAyat {
            text-align: center;
            border-radius: 3px;
            position: relative;
            margin: auto auto auto auto;
            width: 550px;
            display: table;
            background-color: #fff;
        }

        .quoteBox {
            border-radius: 3px;
            position: relative;
            margin: 8px auto auto auto;
            padding: 40px 50px;
            display: table;
            background-color: #fff;
        }

        #arabicVerseText {
            font-size: 200%;
        }

        #content {
            font-family: 'Open Sans Condensed', sans-serif;
        }

        input[type=button] {
            cursor: pointer;
        }

        .condensedSanSerif {
            font-family: 'Open Sans Condensed', sans-serif;
        }

        .largeSize {
            font-size: 200%;
        }

        .mediumSize {
            font-size: 150%;
        }

        .smallSize {
            font-size: 130%;
        }

    </style>
</head>

<body>
    <div class="containerAyat">
        <div class="quoteBox">

            <div id="content" class="container">
                <div id="arabicVerseText" class="largeSize"></div>
                <div id="verseText" class="mediumSize"></div>
                <div id="surahAndAyah" class="mediumSize"></div>
            </div>
            <input id="shuffle" type="button" value="New Ayat">
            <input id="tweet" type="button" value="Tweet">
        </div>
    </div>
    <script>
        var arText;
        var enText;
        var surah;
        var ayahNumber;
        var surahAndAyah;

        $(document).ready(function() {
            getQuote();
            $("#shuffle").on("click", getQuote);
            $("#tweet").click(function() {
                var tweetLink =
                    'https://twitter.com/intent/tweet?hashtags=quotes&related=freecodecamp&text=' + '"' +
                    enText + '" QS' + surahAndAyah;
                window.open(tweetLink);
            });
        });


        function getQuote() {
            var ayah = Math.floor(Math.random() * 6236) + 1
            var url = "https://api.alquran.cloud/ayah/" + ayah + "/en.asad";
            var urlArabic = "https://api.alquran.cloud/ayah/" + ayah;
            arText;
            enText;
            surah;
            ayahNumber;
            surahAndAyah;

            $.getJSON(urlArabic, function(data) {
                arText = data.data.text;
                document.getElementById("arabicVerseText").innerHTML = arText;
                console.log(arText);
            });

            $.getJSON(url, function(data) {
                    console.log(data);
                    enText = data.data.text;
                    surah = data.data.surah.englishName;
                    ayahNumber = data.data.surah.numberOfAyahs;
                    surahAndAyah = surah + " : " + ayahNumber
                    document.getElementById("verseText").innerHTML = enText;
                    document.getElementById("surahAndAyah").innerHTML = surahAndAyah;
                    console.log(enText);
                    console.log(surah);
                    console.log(ayahNumber);
                    console.log("success");
                })
                .done(function() {
                    console.log("second success");
                })
                .fail(function(jqXHR, textStatus, errorThrown) {
                    alert('getJSON request failed! ' + textStatus);
                })
                .always(function() {
                    console.log("complete");
                });
        }
    </script>

</body>

</html>
