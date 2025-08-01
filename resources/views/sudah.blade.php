<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" type="image/x-icon" href="img/logo-hitam.png" />

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    <title>Sudah Pesan</title>
    <style>
        body {
            background-color: #131720;
        }

        .card {
            border: none;
            border-top: 5px solid rgb(106 185 252);
            background: #1a3363;
            color: #b7b7b7;
        }

        p {
            font-weight: 600;
            font-size: 15px;
        }

        @media (min-width: 768px) {
            img {
                max-width: 100% !important;
            }
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="row d-flex justify-content-center mt-5">
            <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                <div class="card p-3">
                    <img src="/img/logo-putih.png" alt="" style="width: 85%; margin: auto;">
                    <h1 class="text-center">Checkout Berhasil</h1>
                    <p class="text-center">Yay! Terima Kasih. Pesanan kamu sudah kami terima dan sedang kami siapkan. Tunggu barang sampai di alamat yang terdaftar!</p>
                    <a href="/produk" class="btn btn-light rounded-5">Kembali Belanja</a>
                </div>
            </div>
        </div>
    </div>
    <script>
        window.onload = function() {
            // Globals
            var random = Math.random,
                cos = Math.cos,
                sin = Math.sin,
                PI = Math.PI,
                PI2 = PI * 2,
                timer = undefined,
                frame = undefined,
                confetti = [];

            var particles = 10,
                spread = 40,
                sizeMin = 3,
                sizeMax = 12 - sizeMin,
                eccentricity = 10,
                deviation = 100,
                dxThetaMin = -.1,
                dxThetaMax = -dxThetaMin - dxThetaMin,
                dyMin = .13,
                dyMax = .18,
                dThetaMin = .4,
                dThetaMax = .7 - dThetaMin;

            var colorThemes = [
                function() {
                    return color(200 * random() | 0, 200 * random() | 0, 200 * random() | 0);
                },
                function() {
                    var black = 200 * random() | 0;
                    return color(200, black, black);
                },
                function() {
                    var black = 200 * random() | 0;
                    return color(black, 200, black);
                },
                function() {
                    var black = 200 * random() | 0;
                    return color(black, black, 200);
                },
                function() {
                    return color(200, 100, 200 * random() | 0);
                },
                function() {
                    return color(200 * random() | 0, 200, 200);
                },
                function() {
                    var black = 256 * random() | 0;
                    return color(black, black, black);
                },
                function() {
                    return colorThemes[random() < .5 ? 1 : 2]();
                },
                function() {
                    return colorThemes[random() < .5 ? 3 : 5]();
                },
                function() {
                    return colorThemes[random() < .5 ? 2 : 4]();
                }
            ];

            function color(r, g, b) {
                return 'rgb(' + r + ',' + g + ',' + b + ')';
            }

            // Cosine interpolation
            function interpolation(a, b, t) {
                return (1 - cos(PI * t)) / 2 * (b - a) + a;
            }

            // Create a 1D Maximal Poisson Disc over [0, 1]
            var radius = 1 / eccentricity,
                radius2 = radius + radius;

            function createPoisson() {
                // domain is the set of points which are still available to pick from
                // D = union{ [d_i, d_i+1] | i is even }
                var domain = [radius, 1 - radius],
                    measure = 1 - radius2,
                    spline = [0, 1];
                while (measure) {
                    var dart = measure * random(),
                        i, l, interval, a, b, c, d;

                    // Find where dart lies
                    for (i = 0, l = domain.length, measure = 0; i < l; i += 2) {
                        a = domain[i], b = domain[i + 1], interval = b - a;
                        if (dart < measure + interval) {
                            spline.push(dart += a - measure);
                            break;
                        }
                        measure += interval;
                    }
                    c = dart - radius, d = dart + radius;

                    // Update the domain
                    for (i = domain.length - 1; i > 0; i -= 2) {
                        l = i - 1, a = domain[l], b = domain[i];
                        // c---d          c---d  Do nothing
                        //   c-----d  c-----d    Move interior
                        //   c--------------d    Delete interval
                        //         c--d          Split interval
                        //       a------b
                        if (a >= c && a < d)
                            if (b > d) domain[l] = d; // Move interior (Left case)
                            else domain.splice(l, 2); // Delete interval
                        else if (a < c && b > c)
                            if (b <= d) domain[i] = c; // Move interior (Right case)
                            else domain.splice(i, 0, c, d); // Split interval
                    }

                    // Re-measure the domain
                    for (i = 0, l = domain.length, measure = 0; i < l; i += 2)
                        measure += domain[i + 1] - domain[i];
                }

                return spline.sort();
            }

            // Create the overarching container
            var container = document.createElement('div');
            container.style.position = 'fixed';
            container.style.top = '0';
            container.style.left = '0';
            container.style.width = '100%';
            container.style.height = '0';
            container.style.overflow = 'visible';
            container.style.zIndex = '9999';

            // Confetto constructor
            function Confetto(theme) {
                this.frame = 0;
                this.outer = document.createElement('div');
                this.inner = document.createElement('div');
                this.outer.appendChild(this.inner);

                var outerStyle = this.outer.style,
                    innerStyle = this.inner.style;
                outerStyle.position = 'absolute';
                outerStyle.width = (sizeMin + sizeMax * random()) + 'px';
                outerStyle.height = (sizeMin + sizeMax * random()) + 'px';
                innerStyle.width = '100%';
                innerStyle.height = '100%';
                innerStyle.backgroundColor = theme();

                outerStyle.perspective = '50px';
                outerStyle.transform = 'rotate(' + (360 * random()) + 'deg)';
                this.axis = 'rotate3D(' +
                    cos(360 * random()) + ',' +
                    cos(360 * random()) + ',0,';
                this.theta = 360 * random();
                this.dTheta = dThetaMin + dThetaMax * random();
                innerStyle.transform = this.axis + this.theta + 'deg)';

                this.x = window.innerWidth * random();
                this.y = -deviation;
                this.dx = sin(dxThetaMin + dxThetaMax * random());
                this.dy = dyMin + dyMax * random();
                outerStyle.left = this.x + 'px';
                outerStyle.top = this.y + 'px';

                // Create the periodic spline
                this.splineX = createPoisson();
                this.splineY = [];
                for (var i = 1, l = this.splineX.length - 1; i < l; ++i)
                    this.splineY[i] = deviation * random();
                this.splineY[0] = this.splineY[l] = deviation * random();

                this.update = function(height, delta) {
                    this.frame += delta;
                    this.x += this.dx * delta;
                    this.y += this.dy * delta;
                    this.theta += this.dTheta * delta;

                    // Compute spline and convert to polar
                    var phi = this.frame % 7777 / 7777,
                        i = 0,
                        j = 1;
                    while (phi >= this.splineX[j]) i = j++;
                    var rho = interpolation(
                        this.splineY[i],
                        this.splineY[j],
                        (phi - this.splineX[i]) / (this.splineX[j] - this.splineX[i])
                    );
                    phi *= PI2;

                    outerStyle.left = this.x + rho * cos(phi) + 'px';
                    outerStyle.top = this.y + rho * sin(phi) + 'px';
                    innerStyle.transform = this.axis + this.theta + 'deg)';
                    return this.y > height + deviation;
                };
            }

            function poof() {
                if (!frame) {
                    // Append the container
                    document.body.appendChild(container);

                    // Add confetti
                    var theme = colorThemes[0],
                        count = 0;
                    (function addConfetto() {
                        var confetto = new Confetto(theme);
                        confetti.push(confetto);
                        container.appendChild(confetto.outer);
                        timer = setTimeout(addConfetto, spread * random());
                    })(0);

                    // Start the loop
                    var prev = undefined;
                    requestAnimationFrame(function loop(timestamp) {
                        var delta = prev ? timestamp - prev : 0;
                        prev = timestamp;
                        var height = window.innerHeight;

                        for (var i = confetti.length - 1; i >= 0; --i) {
                            if (confetti[i].update(height, delta)) {
                                container.removeChild(confetti[i].outer);
                                confetti.splice(i, 1);
                            }
                        }

                        if (timer || confetti.length)
                            return frame = requestAnimationFrame(loop);

                        // Cleanup
                        document.body.removeChild(container);
                        frame = undefined;
                    });
                }
            }

            poof();
        };
    </script>
</body>

</html>
