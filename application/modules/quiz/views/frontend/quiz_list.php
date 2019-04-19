<section class="hazard-section pdtb-50" id="hazard-section">
    <div class="container">
        <div class="section-title mrb-50">
            <h3>हाजिरीजवाफ खेल्नुहोस्</h3>
            <span>विभिन्न विपदको जानकारी सम्बन्धि हाजिरीजवाफ खेल खेल्नुहोस् र वास्तविक जानकारी लिनुहोस्</span>
            

        </div>
        <div class="row">
        <?php if($category):
            foreach ($category as $key => $value) {  ?>
            <div class="col-xl-3 iset-3" data-aos="fade-up" data-aos-easing="ease-out-cubic" data-aos-duration="2000" data-aos-offset="0">
                <div class="hazard-item" >
                <?php 
                switch ($value['slug']) {
                    case "flood":
                        $imagenew = '<figure>
                        <svg xmlns="http://www.w3.org/2000/svg" width="109.217" height="96.517" viewBox="0 0 109.217 96.517"><g transform="translate(0 0)"><path d="M37.1,39.875a10.475,10.475,0,0,0-12.7-8.338A10.941,10.941,0,0,0,16.17,42.43V57.2c1.081-.172,2.144-.377,3.225-.617a49.523,49.523,0,0,1,17.875-.96V54.046c0-3.946.018-7.909,0-11.871A15.087,15.087,0,0,0,37.1,39.875Z" transform="translate(10.386 15.672)" fill=""/><path d="M37.1,39.875a10.475,10.475,0,0,0-12.7-8.338A10.941,10.941,0,0,0,16.17,42.43V57.2c1.081-.172,2.144-.377,3.225-.617a49.523,49.523,0,0,1,17.875-.96V54.046c0-3.946.018-7.909,0-11.871A15.087,15.087,0,0,0,37.1,39.875Z" transform="translate(10.386 15.672)" fill=""/><path d="M107.34,42.457c-1.235-.943-2.488-1.887-3.705-2.83-1.956-1.528-3.929-3.02-5.867-4.512L80.132,21.545l-3.466-2.66C71.314,14.8,65.96,10.668,60.625,6.585a9.184,9.184,0,0,0-2.779-1.492c-.051-.018-.085-.018-.121-.034-.275-.085-.549-.154-.84-.223-.154-.018-.308-.034-.48-.051-.206-.018-.4-.018-.583-.018s-.4,0-.583.018c-.154.018-.344.034-.5.051-.275.069-.549.136-.824.223-.034.018-.085.018-.121.034a8.931,8.931,0,0,0-2.763,1.492c-6.519,4.974-13.021,9.984-19.523,14.96V16a2.428,2.428,0,0,0-2.419-2.419H19.9a2.431,2.431,0,0,0-2.419,2.437c.018,5.454.069,10.087-.069,14.7a4.481,4.481,0,0,1-1.047,2.47c-2.779,2.162-5.559,4.288-8.355,6.433-1.235.943-2.47,1.887-3.688,2.83-1.682,1.287-2.8,2.763-2.711,4.65a4.594,4.594,0,0,0,.84,2.8,6.421,6.421,0,0,0,7.016,2.334,7.379,7.379,0,0,0,1.767-.789V78.381a66.24,66.24,0,0,0,7.822.154V59.046h.018V46.127a2.421,2.421,0,0,1,.085-.6Q36.271,32.48,53.3,19.348l1.184-.875a2.944,2.944,0,0,1,1.338-.447,2.8,2.8,0,0,1,1.32.447l1.184.875Q75.359,32.5,92.5,45.527c.018.206.069.4.069.6V59.046h.018V75.087a31.767,31.767,0,0,1,7.822.7V51.445a6.887,6.887,0,0,0,1.784.789,6.426,6.426,0,0,0,7-2.334,4.7,4.7,0,0,0,.824-2.8C110.119,45.218,109.022,43.744,107.34,42.457Z" transform="translate(-0.858 -4.767)" fill=""/><path d="M37.1,39.875a10.475,10.475,0,0,0-12.7-8.338A10.941,10.941,0,0,0,16.17,42.43V57.2c1.081-.172,2.144-.377,3.225-.617a49.523,49.523,0,0,1,17.875-.96V54.046c0-3.946.018-7.909,0-11.871A15.087,15.087,0,0,0,37.1,39.875Z" transform="translate(10.386 15.672)" fill=""/><path d="M37.1,39.875a10.475,10.475,0,0,0-12.7-8.338A10.941,10.941,0,0,0,16.17,42.43V57.2c1.081-.172,2.144-.377,3.225-.617a49.523,49.523,0,0,1,17.875-.96V54.046c0-3.946.018-7.909,0-11.871A15.087,15.087,0,0,0,37.1,39.875Z" transform="translate(10.386 15.672)" fill=""/><path d="M33.441,20.777V35.662h8.346V20.777Z" transform="translate(23.721 7.594)" fill=""/><path d="M26.271,20.777V35.662h8.346V20.777Z" transform="translate(18.185 7.594)" fill=""/><path d="M65.064,28.956,47.428,15.4l-3.468-2.66" transform="translate(31.842 1.387)" fill=""/><path d="M82.306,54.149c-8.7-2.6-17.412-2.189-26.174-.262a73.7,73.7,0,0,1-30.15.36,2.515,2.515,0,0,0-1.48.133c.443.323.867.68,1.333.964a47.212,47.212,0,0,0,27.538,7.273c4.076-.223,8.1-1.409,12.142-2.183A85.751,85.751,0,0,1,87.841,58.8c1.522.108,3.037.314,4.556.475A26.642,26.642,0,0,0,82.306,54.149Z" transform="translate(16.82 31.949)" fill=""/><path d="M53.865,48.327c-7.776-2.32-15.566-1.956-23.4-.234a65.865,65.865,0,0,1-26.953.321,2.237,2.237,0,0,0-1.322.119c.4.289.774.608,1.191.863A42.188,42.188,0,0,0,28,55.9c3.643-.2,7.241-1.26,10.856-1.953a76.679,76.679,0,0,1,19.957-1.46c1.361.1,2.715.282,4.072.425A23.841,23.841,0,0,0,53.865,48.327Z" transform="translate(-0.407 27.603)" fill=""/><path d="M75.855,47.623c-5.931-1.77-11.873-1.492-17.847-.179a50.219,50.219,0,0,1-20.558.245,1.717,1.717,0,0,0-1.008.09c.3.22.59.464.909.657a32.178,32.178,0,0,0,18.777,4.958,63.243,63.243,0,0,0,8.281-1.489,58.526,58.526,0,0,1,15.222-1.115c1.038.074,2.072.214,3.106.324A18.239,18.239,0,0,0,75.855,47.623Z" transform="translate(26.038 27.359)" fill=""/><path d="M40.6,56.492C34.666,54.722,28.724,55,22.75,56.313a50.219,50.219,0,0,1-20.558.245,1.717,1.717,0,0,0-1.008.09c.3.22.59.464.909.657A32.178,32.178,0,0,0,20.87,62.264a63.243,63.243,0,0,0,8.281-1.489A58.526,58.526,0,0,1,44.373,59.66c1.038.074,2.072.214,3.106.324A18.213,18.213,0,0,0,40.6,56.492Z" transform="translate(-1.184 34.206)" fill=""/></g></svg>
                    </figure>';
                        break;
                    case "drought":
                         $imagenew = '<figure>
                        <svg xmlns="http://www.w3.org/2000/svg" width="123.825" height="100.728" viewBox="0 0 123.825 100.728"><g transform="translate(1201.635 -331.774)"><g transform="translate(-1203 326)"><path d="M46.014,54.948l17.831-3.4V30.731L39.07,39.485Z" transform="translate(61.064 40.419)" fill=""/><path d="M35.645,51.109H69.392V39.976L49.57,43.6Z" transform="translate(55.517 55.391)" fill=""/><g transform="translate(1.365 5.774)"><path d="M7.954,36.652l9.991,17.923L67.993,38.326,43.779,27.075H29.342Z" transform="translate(9.306 28.724)" fill=""/><path d="M14.728,44.17,9.94,56.891H57.39L34.3,36.406Z" transform="translate(12.522 43.836)" fill=""/><path d="M14.659,31.74,1.365,37.605V64.447H18.638l5.189-18.172Z" transform="translate(-1.365 36.279)" fill=""/><path d="M14.96,51.594c.024-1.566.065-3.453.162-5.606.11-3.047.7-27.809,7.4-29.847.946-.325,2.371.241,3.607,1.121a18.93,18.93,0,0,1,3.337,3.1c1.936,2.213,9.747,15.222,9.747,15.222-6.2-4.626-8.566-9.564-9.449-13-1.739,3.136-3.911,11.439,13.653,20.707,0,0,4.354-23.455-9.64-22.538-2.756-3.95-7.353-9.221-11.984-8.788C13.457,13.137,10.151,32.846,9.847,34.795c-.7,3.9-1.171,7.547-1.517,10.669-.283,2.392-.482,4.469-.626,6.132H1.365V65.865L31.757,51.6H14.96Z" transform="translate(-1.365 4.205)" fill=""/><path d="M64.47,38.942l-11.015-6.42L21.416,39.94,45.2,63.181h8.257L67.661,52.936Z" transform="translate(31.108 37.546)" fill=""/><path d="M66.662,30.183c.469-.579,1.066-1.312,1.8-2.2,9.213-10.63,13.666-2.221,14.038-1.708C85.6,30.4,84.892,39.59,84.892,39.59c-2.606-4.846-2.648-8.728-2.182-11.209-2.062,1.5-5.952,6.2,2.578,17.43,0,0,9.252-13,1.273-17.056-.055-.191-.12-.406-.21-.652-.267-.828-5.386-15.927-19.379-5.019-.388.3-.715.6-1.069.893-.663-4.031-2.677-15.2-11.193-17.807C43.126,2.61,30.332,24.211,30.332,24.211c2.73-9.1,7.429-13.9,11.023-16.356-4.346-.686-14.834.3-18.14,24.443,0,0,29.09-4.875,21.855-20.768.3-.152.576-.288.891-.453,1.286-.485,11.316-5.868,13.669,9.593,1.331,8.765.778,29.388.736,33-.094,2.916-.165,5.663-.215,7.911H25.769L60.124,75.844l29.4-8.275V61.575h-22.9C66.851,55.142,66.78,43.048,66.662,30.183Z" transform="translate(34.021 -5.774)" fill=""/></g></g></g></svg>
                    </figure>';
                        break;
                    case "landslide":
                         $imagenew = '<figure>
                        <svg xmlns="http://www.w3.org/2000/svg" width="95.051" height="98.878" viewBox="0 0 95.051 98.878"><path d="M44,36.9c.58,1.7,1.93,1.927,0,2.568l-5.139,2.568L33.721,36.9c-.676-2.009.161-3.3,2.571-5.142l5.142,2.568C42.064,35.11,43.8,36.3,44,36.9Z" transform="translate(-0.375 -0.356)" fill=""/><path d="M38.837,16.143a6.867,6.867,0,0,0-5.142,0c-.9.3-1.514,1.659-2.571,2.574v7.715l7.713-2.574c2.119-2.41,3.071-3.636,2.571-5.142C41,17.518,40.4,16.926,38.837,16.143Z" transform="translate(-0.349 -0.175)" fill=""/><path d="M60.177,26.595l-.58-.071c-.3.1-2.5-1.747-5.136-2.574-1.271-.438-1.287.5-2.574,0-1.823.618-2.127,2.141-2.571,5.142s-1.011,7.261,0,10.282c.268.816,1.557,1.549,2.571,2.568l2.574,2.574h2.563c3.351-1.462,4.632-4.966,5.147-5.142,1.2-.723,2.147-2.869,2.574-5.142.405-2.283.7-3.017,0-5.142A3.574,3.574,0,0,0,60.177,26.595Z" transform="translate(-0.546 -0.267)" fill=""/><path d="M59.72,49.921v5.142a9.149,9.149,0,0,0,5.147,2.574L70,55.063l-2.568-7.716Z" transform="translate(-0.669 -0.531)" fill=""/><path d="M90.683,49.91c-3.428-3.8-5.255-4.255-10.282-2.574H77.833c-2.388,2.108-3.487,3.74-5.142,7.716-1.616,3.794-3.3,8.1-2.574,10.282a49.346,49.346,0,0,0,5.147,5.141c3.209,2.645,4.742,4.255,5.136,5.142l10.282-2.574c1.106-.361,5.4-9.511,5.142-10.278C93.761,56.569,92.786,52.281,90.683,49.91Z" transform="translate(-0.784 -0.52)" fill=""/><path d="M82.272,98.741c-.027-.17-.17-.509-.082-.509-1.927-2.739-10.174-9.237-10.282-10.282-.121-1.112-2.42-5.109-5.141-7.71C65.6,78.394,65.491,76.981,64.2,75.1c-1.292-1.868-3.7-5.716-5.147-7.716l-9.7-6.088c-1.407-.756-9.505-.487-20.779-12.407l-.372-7.211c-1.52-1.851-4.665-6.275-5.142-7.71-2.97-8.86-1-16.093-2.571-28.275l-5.72-3.833L7.934.549A52.744,52.744,0,0,0,0,0V98.878H82.5Z" fill=""/></svg>
                    </figure>';
                        break;
                    case "fire":
                         $imagenew = '<figure>
                        <svg xmlns="http://www.w3.org/2000/svg" width="77.363" height="96.204" viewBox="0 0 77.363 96.204"><g transform="translate(462.921 95)"><g transform="translate(-467 -96)"><path d="M61.264,26.855c5.111,9.921,2.405,15.332,2.405,15.332C55.552,15.13,32.1,1,32.1,1c11.124,12.927,4.51,25.855,4.51,25.855C32.7,19.94,25.187,15.431,25.187,15.431a28.126,28.126,0,0,1-1.5,31.266c-5.411-7.516-.6-16.836-.6-16.836A44.588,44.588,0,0,0,9.855,56.017C7.149,53.01,7.45,45.494,7.45,45.494-2.772,79.166,11.959,96,28.795,96.9c1.8-3.908,12.025-18.038-.6-29.763,0,0,14.13-1.5,20.143,21.045,0,0,6.313-14.13-6.614-21.045,0,0,16.836,2.706,17.136,17.738A22.207,22.207,0,0,1,54.95,97.2c8.718-.3,17.136-6.013,21.345-12.627C93.732,58.121,61.264,26.855,61.264,26.855Z" fill=""/></g></g></svg>
                    </figure>';
                        break;
                    case "heat-wave":
                         $imagenew = '<figure>
                        <svg xmlns="http://www.w3.org/2000/svg" width="62.555" height="97.449" viewBox="0 0 62.555 97.449"><g transform="translate(1302.013 221.867)"><path d="M56.667,61.125A16.308,16.308,0,1,1,65.823,58.3,16.3,16.3,0,0,1,56.667,61.125Zm.01,14.6a1.887,1.887,0,0,0,1.88-1.895l-.029-7.9a1.887,1.887,0,0,0-1.887-1.88h-.008a1.887,1.887,0,0,0-1.88,1.895l.029,7.9a1.887,1.887,0,0,0,1.887,1.88Zm0-50.925a1.887,1.887,0,0,0,1.88-1.895l-.029-7.9a1.887,1.887,0,0,0-1.887-1.88h-.008a1.887,1.887,0,0,0-1.88,1.895l.029,7.9A1.887,1.887,0,0,0,56.67,24.8ZM78.142,67.036a1.888,1.888,0,0,0,.034-2.669l-5.507-5.656a1.887,1.887,0,0,0-2.7,2.635L75.474,67a1.887,1.887,0,0,0,2.669.034ZM42.768,30.4a1.888,1.888,0,0,0,.034-2.669l-5.51-5.657a1.887,1.887,0,1,0-2.7,2.635L40.1,30.37a1.887,1.887,0,0,0,2.669.034ZM87.541,45.875a1.887,1.887,0,0,0-1.828-1.944l-7.89-.243a1.85,1.85,0,0,0-1.944,1.828,1.887,1.887,0,0,0,1.828,1.944l7.89.243h.059A1.886,1.886,0,0,0,87.541,45.875ZM36.65,44.1a1.887,1.887,0,0,0-1.828-1.944l-7.89-.243a1.887,1.887,0,0,0-.116,3.772l7.89.243h.059A1.887,1.887,0,0,0,36.65,44.1Zm36.981-12,5.846-5.308a1.887,1.887,0,1,0-2.538-2.794L71.094,29.3A1.887,1.887,0,0,0,73.632,32.1ZM35.786,66.171l5.848-5.306a1.888,1.888,0,1,0-2.535-2.8l-5.848,5.306a1.888,1.888,0,0,0,2.535,2.8Zm20.146,44.222a1.888,1.888,0,0,0,.877-2.521c-2.2-4.54-.639-7.881,1.165-11.749,1.929-4.141,4.116-8.834,1.141-14.988a1.888,1.888,0,1,0-3.4,1.644c2.2,4.54.639,7.881-1.165,11.749-1.929,4.141-4.116,8.834-1.141,14.988a1.888,1.888,0,0,0,1.7,1.066A1.918,1.918,0,0,0,55.932,110.394Zm-12.786,0a1.888,1.888,0,0,0,.877-2.521c-2.2-4.54-.639-7.881,1.165-11.749,1.929-4.141,4.116-8.834,1.141-14.988a1.888,1.888,0,1,0-3.4,1.644c2.2,4.54.639,7.881-1.165,11.749-1.929,4.141-4.116,8.834-1.141,14.988a1.888,1.888,0,0,0,1.7,1.066A1.918,1.918,0,0,0,43.147,110.394Zm25.572,0a1.888,1.888,0,0,0,.877-2.521c-2.2-4.54-.639-7.881,1.165-11.749,1.929-4.141,4.116-8.834,1.141-14.988a1.888,1.888,0,1,0-3.4,1.644c2.2,4.54.639,7.881-1.165,11.749-1.929,4.141-4.116,8.834-1.141,14.988a1.888,1.888,0,0,0,1.7,1.066A1.914,1.914,0,0,0,68.718,110.394Z" transform="translate(-1327 -235)" fill=""/></g></svg>
                    </figure>';
                        break;
                    case "road-accidents":
                        $imagenew = "";
                        break;
                    case "earthquake":
                        $imagenew = '<figure>
                        <svg xmlns="http://www.w3.org/2000/svg" width="101.096" height="101.092" viewBox="0 0 101.096 101.092"><g transform="translate(841 287.996)"><path d="M80.212,36.884h3.611a3.612,3.612,0,0,0,2.458-6.257L64.389,10.3a8.572,8.572,0,0,0-11.671-.008l-21.9,20.335a3.612,3.612,0,0,0,2.458,6.257h3.611V58.547H8V109.1H36.885L45.55,93.931a1.805,1.805,0,0,0-1.444-2.888H33.683a1.806,1.806,0,0,1-1.349-3.005l19.14-21.532a2.186,2.186,0,0,1,3.707,2.143l-3.062,9.185a1.805,1.805,0,0,0,1.713,2.377H66.269a1.8,1.8,0,0,1,1.567,2.7L54.938,109.1H109.1V58.547H80.212ZM64.867,42.89c-.081.084-5.54,5.607-5.622,5.69l2.914,9.968H51.327V47.716a3.1,3.1,0,0,1,1.015-2.6l4.777-4.72c-.522-.556-4.3-4.576-4.82-5.131a2.818,2.818,0,0,1-.3-3.467l5.821-8.291a2.37,2.37,0,0,1,4.211,2.1l-3.275,6.728,5.959,5.6A3.5,3.5,0,0,1,64.867,42.89Z" transform="translate(-849 -296)" fill="" opacity="0.866"/></g></svg>
                    </figure>';
                        break;
                       
                } ?>
                    <?php echo $imagenew; ?>
                    <div class="hazard-content">
                        <h4><a href="<?php echo base_url('/drrinfo/drrdetails/'.$value['slug']) ?>"><?php echo $value['name']; ?></a></h4>
                        <p><?php echo $value['description']; ?></p>
                    </div>
                    <a href="<?php echo base_url('quiz/play_quiz/'. $value['slug']) ?>" class="iset-btn">Play quiz <i class="la la-long-arrow-right"></i></a>
                </div>
            </div>
        <?php } endif; ?>
        </div>
    </div>
</section>


