<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Money Tracker</title>

</head>
<style>
body {
    font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    scroll-behavior: smooth;
}

header {
    padding: 8px 0;
    display: flex;
    justify-content: space-between;
    align-items: center;
    width: 100%;
    position: fixed;
    background-color: #fff;
    border-bottom: 1px solid rgba(63, 121, 74, 0.2);
}

.logo {
    display: flex;
    align-items: center;
}

.logo h1 {
    margin: 0;
    font-size: 1.3em;
    color: #2b6559;
}

.logo img {
    max-width: 30px;
    margin-right: 5px;
    margin-left: 25px;
}

nav a {
    color: #000000;
    text-decoration: none;
    margin-right: 25px;
    font-weight: 500;
    padding: 7px 3px;
    text-align: center;
}

nav a:hover {
    color: #2b6559;
}

.start-for-freee {
    font-size: 20px;
    background-color: #2b6559;
    color: #fff;
    text-decoration: none;
    border-radius: 7px;
    padding: 10px 20px;
}

.start-for-freee:hover {
    background-color: #064019;
    color: #eaefef;
}

.start-for-free {
    background-color: #2b6559;
    color: #fff;
    padding: 8px 10px;
    border-radius: 5px;
    text-decoration: none;
    text-align: center;
    display: inline-block;
    transition: background-color 0.3s;
}

.start-for-free:hover {
    background-color: #064019;
    color: #eaefef;
}

.hero {
    background-size: cover;
    color: #000000;
    text-align: center;
    padding: 100px 0;
}

.hero h1 {
    padding-top: 20px;
    font-size: 3.5em;
    margin-bottom: 70px;
}

.hero p {
    font-size: 1.2em;
    margin-bottom: 40px;
}

.hero a {
    margin-top: -10px;
}

.highlight-green {
    color: #2b6559;
    /* Warna hijau yang diinginkan */
}

.container {
    max-width: 1200px;
    margin: 0 auto;
}


footer {
    background-color: #f9fefb;
    color: #000000;
    text-align: center;
    font-size: small;
    display: flex;
    justify-content: space-between;
    padding: 0px;
}

.social-icons {
    order: 2;
}

.social-icons a {
    margin-right: 20px;
    margin-top: 10px;
}

.social-icons img {
    width: 20px;
    margin-top: 10px;
}

.social-icons a:hover img {
    transform: scale(1.2);
}

#fitur {
    background-color: #ffffff;
    padding: 30px 0;
}

.services-container {
    width: 80%;
    margin: 0 auto;
}

.service-top {
    text-align: center;
    margin-bottom: 50px;
}

.service-top h1 {
    font-size: 2em;
    color: #333;
}

.service-top p {
    color: #666;
}

.service-bottom {
    text-align: center;
    display: flex;
    justify-content: space-around;
    flex-wrap: wrap;
}

.service-item {
    width: calc(30% - 20px);
    background-color: #fff;
    padding: 20px;
    margin-bottom: 20px;
    border-radius: 8px;
    box-shadow: 0 5px 7px rgba(75, 6, 194, 0.1);
    transition: transform 0.3s ease-in-out;
}

.service-item:hover {
    transform: scale(1.05);
}

.service-item h2 {
    font-size: 1.3em;
    color: #333;
    margin-bottom: 0;
}

.service-item p {
    color: #666;
}

.icon img {
    max-width: 100px;
    max-height: 100px;
}

.premium {
    background-color: #ffffff;
    padding: 40px 0;
}

.premium h2 {
    text-align: center;
    font-size: 2em;
    color: #333;
}

.premium-content {
    text-align: center;
    max-width: 800px;
    margin: 0 auto;
}

.premium-content p {
    color: #666;
    font-size: 1.2em;
    margin-bottom: 20px;
}

.premium-features table {
    width: 100%;
    border-collapse: collapse;
    margin-top: 20px;
}

.premium-features th,
.premium-features td {
    border: 1px solid #ddd;
    padding: 10px;
    text-align: left;
}

.premium-features th {
    background-color: #2b6559;
    color: #fff;
}

.premium-features img {
    width: 20px;
    margin-left: 2px;
    padding: 5px;
}

.coming-soon-btn {
    color: #7a9680;
    display: inline-block;
    padding: 10px 20px;
    letter-spacing: 20px;
    margin-top: 20px;
    text-decoration: none;
}

.containerr {
    max-width: 900px;
    margin: 0 auto;
    display: flex;
    align-items: center;
    flex-direction: row;
    margin-bottom: 60px;
}

.money-image {
    max-width: 300px;
    margin-left: 20px;
    border-radius: 8px;
}

.content {
    flex: 1;
    margin-left: 20px;
}

.money-tracker {
    background-color: #f5f5f5;
    padding: 40px;
}
</style>

<body>
    <header>
        <div class="logo">
            <img src="assets/img/logom.png" alt="Logo" />
            <h1>MoneyTracker</h1>
        </div>
        <nav>
            <a href="#home">Home</a>
            <a href="#fitur">Features</a>
            <a href="#premium">Premium</a>
            <a href="login.php" class="start-for-free">Get Started</a>
        </nav>
    </header>

    <section id="home">
        <div class="hero">
            <div class="container">
                <h1>
                    <span class="highlight-green">Simple Way</span> to Manage <br />
                    <span class="highlight-green">Personal Finance</span>
                </h1>

                <a href="login.php" class="start-for-freee">Get Started</a>
            </div>
        </div>
    </section>
    <section class="money-tracker">
        <div class="containerr">
            <img src="assets/img/1a.jpg" alt="Money Tracker Image" class="money-image" />
            <div class="content">
                <h2>Simple Money Tracker</h2>
                Discover the simplicity of managing your personal finances with our user-friendly platform.
                Our Simple Way feature provides an intuitive and efficient solution for organizing your income,
                expenses, and savings.</p>
            </div>
        </div>
        <div class="containerr">
            <!-- Gambar di kiri -->

            <!-- Teks di kanan -->
            <div class="content">
                <h1>Realtime Statistics Website</h1>
                <p>Experience the power of real-time data with our Realtime Statistics Website feature. Stay informed
                    about your financial health as our system constantly updates and
                    analyzes your spending patterns, income trends, and overall financial behavior.</p>
            </div>
            <img src="assets/img/1b.jpg" alt="Realtime Statistics Image" class="money-image" />
        </div>
    </section>


    <section id="fitur">
        <div class="services-container">
            <div class="service-top">
                <h1 class="section-title"><br />Get Ready with Our Awesome Features</h1>
                <p>
                    MoneyTracker instills the assurance that every detail is meticulously organized and taken into
                    account, empowering you to advance confidently on the matters that hold significance for you!
                </p>
            </div>
            <div class="service-bottom">
                <div class="service-item">
                    <div class="icon"><img src="assets/img/1.png" /></div>
                    <h2>Multiple devices</h2>
                    <p>Safely synchronize across devices with Bank standard security.</p>
                </div>
                <div class="service-item">
                    <div class="icon"><img src="assets/img/2.png" /></div>
                    <h2>Get Notifications</h2>
                    <p>Get notified of recurring bills and transactions before due date.</p>
                </div>
                <div class="service-item">
                    <div class="icon"><img src="assets/img/3.png" /></div>
                    <h2>Wide Integration</h2>
                    <p>Integrate MoneyTracker with your favorite applications.</p>
                </div>
                <div class="service-item">
                    <div class="icon"><img src="assets/img/4.png" /></div>
                    <h2>Saving Plan</h2>
                    <p>Keep track on savings process to meet your financial goals.</p>
                </div>
                <div class="service-item">
                    <div class="icon"><img src="assets/img/5.png" /></div>
                    <h2>Scan receipt</h2>
                    <p>Take pictures of your receipts to auto-process and organize them.</p>
                </div>
                <div class="service-item">
                    <div class="icon"><img src="assets/img/6.png" /></div>
                    <h2>Debt and loan</h2>
                    <p>Manage your debts, loans, and payment process in one place.</p>
                </div>
            </div>
        </div>
    </section>

    <section id="premium" class="premium">
        <div class="container">
            <h2>Premium</h2>
            <div class="premium-content">
                <p>Unlock the full potential with Money Tracker Premium.</p>
                <div class="premium-features">
                    <table>
                        <thead>
                            <tr>
                                <th>Feature</th>
                                <th>Description</th>
                                <th>Pro</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Priority Support</td>
                                <td>
                                    Experience top-notch customer support with our Priority Support feature. Get quick
                                    and personalized assistance to ensure your MoneyTracker experience is smooth and
                                    tailored to your
                                    needs.
                                </td>
                                <td><img src="assets/img/logo.png" name="proCheckbox" id="prioritySupportCheckbox" />
                                </td>
                            </tr>


                            <tr>
                                <td>Productivity Insights</td>
                                <td>
                                    Gain valuable insights into your productivity habits with Productivity Insights.
                                    Track your task completion trends, identify patterns, and optimize your workflow for
                                    maximum
                                    efficiency.
                                </td>
                                <td><img src="assets/img/logo.png" name="proCheckbox"
                                        id="productivityInsightsCheckbox" /></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <a href="#" class="coming-soon-btn">Cooming Soon</a>
            </div>
        </div>
    </section>

    <footer>
        <div class="social-icons">
            <a href="#" target="_blank"><img src="assets/img/yt.png" alt="YouTube" /></a>
            <a href="#" target="_blank"><img src="assets/img/fb.png" alt="Facebook" /></a>
            <a href="#" target="_blank"><img src="assets/img/tw.png" alt="Twitter" /></a>
            <a href="#" target="_blank"><img src="assets/img/insta.png" alt="Instagram" /></a>
        </div>
        <p>&copy; 2024 Moneytracker. All rights reserved.</p>
    </footer>
</body>

</html>