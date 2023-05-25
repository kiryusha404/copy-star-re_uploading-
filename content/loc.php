<div id="map">

</div>
<div class="loc_info">
<p class="loc">Адрес: ул. Студенческая, Ижевск, 7</p>
<p class="loc">Номер телефона: 89(3419)4536841</p>
<p class="loc">Email: copystar@mail.com</p>
</div>
<div class="work">
    <h1>Режим работы</h1>
    <p>Пн: 8:00-20:00</P>
    <p>Вт: 8:00-20:00</P>
    <p>Ср: 8:00-20:00</P>
    <p>Чт: 8:00-20:00</P>
    <p>Пт: 8:00-20:00</P>
    <p>Сб: 8:00-18:00</P>
    <p>Вс: выходной</P>
</div>
<script>
        function initMap() {
            const uluru = { lat: 56.8725712, lng: 53.175026 };
            const map = new google.maps.Map(document.getElementById("map"), {
                 zoom: 5,
                center: uluru,
            });
            const marker = new google.maps.Marker({
                position: uluru,
                map: map,
            });
        }
        
    </script>
    <script async defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyChfK9fiRftbbIEmDMWTgTFfgWAkbUBXfY&callback=initMap">
    </script>