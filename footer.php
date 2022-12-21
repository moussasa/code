<style>
    * {
        padding: 0;
        margin: 0;
    }

    footer {
        width: 100%;
        height: auto;
        background-color: rgb(79, 79, 104);
        color: white;
    }

    .all_footer {
        padding: 15px;
        width: 100%;
        display: flex;
        flex-direction: row;
        justify-content: space-between;
        color: white;
    }

    .footer_logo {
        display: flex;
        flex-direction: row;
    }

    .footer_logo .img {
        width: 80px;
        height: 80px;
        margin-right: 15px;
    }

    .footer_logo .img img {
        width: 100%;
        height: 100%;
        border-radius: 50%;
    }

    #footer_i {
        color: white;
        margin-right: 10px;
    }

    .footer_contact a {
        color: white;
        text-decoration: none;
    }


    @media (max-width: 910px) {

        .all_footer {
            padding: 10px;
            width: 100%;
            display: flex;
            flex-direction: column;
            color: white;
        }

        .footer_logo {
            display: block;
        }

        #footer_i {
            margin-right: 15px;
            color: white;
        }

        .footer_logo .img {
            margin: 0 auto;
            width: 90px;
            height: 90px;
        }

        .footer_contact {
            border-top: 4px solid white;
            margin-top: 15px;
        }

        .footer_about {
            border-top: 4px solid white;
            margin-top: 15px;
        }

        .footer_logo_text {
            margin-top: 15px;
        }
    }
</style>
</head>
</body>
<footer>
    <div class="all_footer">

        <div class="footer_logo">
            <div class="img">
                <img src="images/img1.jpg" alt="">
            </div>
            <div class="footer_logo_text">
                <h4>R-tech</h4>
                <p>La technologie autrement</p>
                <span>Copyright &copy; 2022</span>
            </div>
        </div>

        <div class="footer_contact">
            <h5>Contacts</h5>
            <p><i id="footer_i" class="fa fa-map-marker" aria-hidden="true"></i>Bamako (MALI)</p>
            <p><i id="footer_i" class="fa fa-phone"></i>70-80-89-83</p>
            <p><i id="footer_i" class="fa fa-envelope"></i><a href="mailto:moussasamake884@gmail.com">moussasamake884@gmail.com</a></p>
        </div>

        <div class="footer_about">
            <h5>A propos</h5>
            <p>Entreprise familliale concue par les frères samaké.</p>
        </div>
    </div>

</footer>
<script>

</script>

</html>