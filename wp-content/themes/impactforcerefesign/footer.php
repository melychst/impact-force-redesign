<footer>
    <div class="container">
        <div class="sub-footer">
            <div class="title-wrap">
                <h1 class="hero-title"><?php echo get_field('main_title', 'option'); ?></h1>     
                <h2><?php echo get_field('second_title', 'option'); ?></h2>    
                <div class="sub-title"><?php echo get_field('sub_title', 'option'); ?></div>              
            </div>
            <span class="dots-wrap dots-g">
                <svg xmlns="http://www.w3.org/2000/svg" width="43" height="7" viewBox="0 0 43 7" fill="none">
                    <circle cx="3.5" cy="3.5" r="3.5" fill="#003548"/>
                    <circle cx="15.5" cy="3.5" r="3.5" fill="#003548"/>
                    <circle cx="27.5" cy="3.5" r="3.5" fill="#003548"/>
                    <circle cx="39.5" cy="3.5" r="3.5" fill="#003548"/>
                </svg>
            </span>
        </div>
        <div class="main-footer">
            <div class="columns display-flex">
                    <div class="columns-wrap">
                        <div class="column left-column">
                            <div class="logo-wrap">
                                <?php 
                                    $logo = get_field('footer_logo', 'option'); 
                                    if( $logo ):
                                ?>
                                    <img src="<?php echo $logo['url']; ?>" alt="<?php echo bloginfo(); ?>">
                                <?php
                                    endif;
                                ?>
                            </div>
                        </div>
                        <div class="column center-column">
                            <div class="social-links-wrap">
                                <?php
                                    $social_links = get_field('social_links','option');
                                ?>
                                <?php if( $social_links['web'] != ''): ?>
                                    <div class="social-link web-link">
                                        <a href="<?php echo $social_links['web']; ?>">
                                            <svg width="41" height="41" viewBox="0 0 41 41" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M21.299 41.0001C20.4648 41.0001 19.6307 41.0001 18.7965 41.0001C18.296 40.8865 17.7955 40.8865 17.3506 40.7729C13.3465 40.2051 9.84289 38.5583 6.83983 35.8325C3.33625 32.6524 1.16737 28.7342 0.333186 24.0777C0.221961 23.3394 0.110736 22.5444 -0.000488281 21.8062C-0.000488281 20.9544 -0.000488281 20.1026 -0.000488281 19.2508C-0.000488281 19.1372 0.055124 18.9669 0.055124 18.8533C0.221961 17.8879 0.277573 16.8657 0.500023 15.9572C2.05717 9.59704 5.67197 4.94053 11.4 2.04441C15.1817 0.113663 19.1858 -0.397417 23.3567 0.284024C28.5842 1.19261 32.8108 3.8048 35.9807 8.0638C39.3174 12.55 40.5965 17.6608 39.9292 23.2259C39.373 27.3713 37.7603 31.0056 35.0353 34.0721C31.921 37.5929 28.1393 39.8076 23.5235 40.6594C22.8006 40.7729 22.0776 40.8865 21.299 41.0001ZM20.0756 6.87128C12.7347 6.87128 6.7286 12.9475 6.7286 20.5001C6.7286 27.9959 12.6791 34.1289 20.0756 34.1289C27.4164 34.1289 33.4225 28.0527 33.4225 20.5001C33.4225 13.0042 27.4164 6.87128 20.0756 6.87128Z" fill="#00AEE9"/>
                                                <path d="M16.2382 23.3388C16.2382 21.4649 16.2382 19.5909 16.2382 17.6602C18.7963 17.6602 21.2989 17.6602 23.8014 17.6602C23.9683 19.5341 23.9683 21.4081 23.8014 23.3388C21.2989 23.3388 18.8519 23.3388 16.2382 23.3388Z" fill="#00AEE9"/>
                                                <path d="M16.5719 15.5026C16.9612 13.5151 17.4617 11.5275 18.6852 9.88072C19.575 8.6882 20.4648 8.6882 21.4102 9.88072C22.3556 11.0732 22.8005 12.4929 23.1898 13.9126C23.301 14.4237 23.4122 14.9347 23.5234 15.4458C21.1877 15.5026 18.9076 15.5026 16.5719 15.5026Z" fill="#00AEE9"/>
                                                <path d="M16.6275 25.4966C18.9076 25.4966 21.1877 25.4966 23.5234 25.4966C23.4122 26.0077 23.301 26.5187 23.1898 27.0298C22.8561 28.3359 22.4668 29.5852 21.6882 30.721C21.4102 31.1185 21.0765 31.4592 20.7428 31.7999C20.2423 32.1974 19.7974 32.1974 19.2969 31.7999C18.9076 31.4592 18.5183 31.0049 18.1847 30.4938C17.3505 29.1309 16.9612 27.5977 16.6275 26.0644C16.5719 25.8941 16.5719 25.7805 16.5719 25.6102C16.6275 25.5534 16.6275 25.5534 16.6275 25.4966Z" fill="#00AEE9"/>
                                                <path d="M14.1252 23.3956C13.8471 23.3956 13.5134 23.3956 13.2354 23.3956C12.0119 23.3956 10.7328 23.3956 9.50935 23.3956C9.23129 23.3956 9.12006 23.3388 9.06445 23.0549C8.73078 21.3513 8.67517 19.6477 9.12006 17.9441C9.12006 17.8305 9.2869 17.6602 9.39813 17.6602C10.9553 17.6602 12.5124 17.6602 14.0696 17.6602C14.1252 17.6602 14.1252 17.6602 14.1808 17.7169C14.1252 19.5341 14.1252 21.4649 14.1252 23.3956Z" fill="#00AEE9"/>
                                                <path d="M25.9148 17.6035C26.2485 17.6035 26.5821 17.6035 26.8602 17.6035C28.0837 17.6035 29.3628 17.6035 30.5862 17.6035C30.8643 17.6035 30.9755 17.6603 31.0311 17.9442C31.3648 19.6478 31.4204 21.3514 30.9755 23.055C30.9755 23.1686 30.8087 23.339 30.6975 23.339C29.1403 23.339 27.5832 23.339 26.026 23.339C25.9704 23.339 25.9704 23.339 25.9148 23.2822C25.9148 23.2254 25.9148 23.1686 25.9148 23.1118C25.9148 21.3514 25.9148 19.4775 25.9148 17.6035Z" fill="#00AEE9"/>
                                                <path d="M25.6924 15.5022C25.4699 14.48 25.2475 13.5147 24.9138 12.4925C24.6357 11.5271 24.1909 10.6185 23.8572 9.70996C25.8036 9.99389 29.4184 13.2307 30.1414 15.5022C28.6398 15.5022 27.1939 15.5022 25.6924 15.5022Z" fill="#00AEE9"/>
                                                <path d="M30.1971 25.4966C28.8068 28.3359 26.6935 30.2099 23.7461 31.3456C24.7471 29.4717 25.2476 27.4841 25.6369 25.4966C27.1384 25.4966 28.64 25.4966 30.1971 25.4966Z" fill="#00AEE9"/>
                                                <path d="M16.3494 9.65381C15.3484 11.5278 14.8479 13.4585 14.5142 15.4461C13.0126 15.4461 11.5111 15.4461 10.0096 15.4461C10.232 13.6857 13.9581 10.2217 16.3494 9.65381Z" fill="#00AEE9"/>
                                                <path d="M9.89856 25.4966C11.4557 25.4966 12.9572 25.4966 14.4588 25.4966C14.7924 27.5409 15.293 29.4717 16.3496 31.4024C13.4021 30.2667 11.2889 28.3359 9.89856 25.4966Z" fill="#00AEE9"/>
                                            </svg>    
                                        </a>
                                    </div>                            
                                <?php endif ;?>
                                <?php if( $social_links['instagram'] != ''): ?>
                                    <div class="social-link ins-link">
                                        <a href="<?php echo $social_links['instagram']; ?>">
                                            <svg width="40" height="41" viewBox="0 0 40 41" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M19.6688 40.4893C8.88001 40.4893 0.0932617 31.517 0.0932617 20.4436C0.0932617 9.42701 8.88001 0.454712 19.7244 0.511499C30.5132 0.511499 39.2999 9.4838 39.2999 20.5004C39.2443 31.5738 30.5132 40.4893 19.6688 40.4893ZM7.65654 20.5004C7.60092 20.5004 7.60092 20.5004 7.65654 20.5004C7.60092 22.0337 7.60092 23.5101 7.60092 25.0434C7.60092 25.6112 7.65654 26.1791 7.71215 26.747C8.10143 29.1888 9.26929 31.0627 11.5494 32.0849C12.606 32.5392 13.7739 32.7663 14.8861 32.7663C17.9448 32.7663 21.0035 32.7663 24.0622 32.7663C24.7295 32.7663 25.3969 32.7096 26.0642 32.596C28.5112 32.1985 30.3464 30.8924 31.2362 28.4506C31.6254 27.4284 31.7923 26.3495 31.7923 25.2705C31.7923 22.204 31.7923 19.1375 31.7923 16.0143C31.7923 15.4464 31.7367 14.8217 31.6811 14.2539C31.2918 11.6985 30.0683 9.76773 27.6214 8.80236C26.6203 8.40485 25.6193 8.23449 24.5627 8.23449C21.3372 8.23449 18.1117 8.23449 14.8305 8.23449C13.6071 8.23449 12.4392 8.46164 11.3269 8.97272C8.88001 10.1652 7.76776 12.2663 7.65654 14.8785C7.54531 16.8093 7.65654 18.6265 7.65654 20.5004Z" fill="#00AEE9"/>
                                                <path d="M19.6689 10.5623C21.2817 10.5623 22.8388 10.5623 24.4516 10.5623C25.0077 10.5623 25.5082 10.6191 26.0644 10.7327C28.0108 11.187 29.2343 12.6066 29.4567 14.6509C29.5123 15.1052 29.5123 15.5595 29.5123 16.0138C29.5123 19.0803 29.5123 22.09 29.5123 25.1565C29.5123 25.8947 29.4011 26.6897 29.1786 27.3712C28.5669 29.1883 27.2322 30.1537 25.397 30.2673C23.1169 30.3809 20.8368 30.3809 18.5567 30.3809C17.0552 30.3809 15.5536 30.3809 13.9965 30.2673C11.7164 30.0969 10.1592 28.5069 9.88117 26.1219C9.82556 25.7244 9.82556 25.3268 9.82556 24.8726C9.82556 21.8061 9.82556 18.7396 9.82556 15.6163C9.82556 14.8781 9.93679 14.1399 10.1592 13.4584C10.771 11.6413 12.1057 10.6759 13.9409 10.5623C15.498 10.4487 17.1108 10.4487 18.7235 10.4487C19.0572 10.5623 19.3909 10.5623 19.6689 10.5623ZM26.0644 20.5C26.0644 16.8656 23.2281 13.9695 19.7246 13.9695C16.1654 13.9695 13.3291 16.8656 13.3291 20.5C13.3291 24.0775 16.1654 26.9737 19.7246 26.9737C23.2281 27.0305 26.0644 24.0775 26.0644 20.5ZM26.0644 12.7202C25.3414 12.7202 24.7853 13.2881 24.7853 14.0263C24.7853 14.7645 25.3414 15.3324 26.0644 15.3324C26.7873 15.3324 27.3434 14.7077 27.2878 14.0263C27.3434 13.2881 26.7873 12.7202 26.0644 12.7202Z" fill="#00AEE9"/>
                                                <path d="M23.784 20.5006C23.784 22.8288 21.9488 24.7028 19.6687 24.7028C17.3885 24.7028 15.5533 22.8288 15.5533 20.5006C15.5533 18.1723 17.3885 16.2983 19.6687 16.2983C21.9488 16.2983 23.784 18.1723 23.784 20.5006Z" fill="#00AEE9"/>
                                                </svg>
                                                
                                        </a>
                                    </div>
                                <?php endif; ?>
                                <?php if( $social_links['facebook'] != ''): ?>
                                    <div class="social-link fb-link">
                                        <a href="<?php echo $social_links['facebook']; ?>">
                                            <svg width="31" height="32" viewBox="0 0 31 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M14.5395 0.171875C15.1753 0.171875 15.8112 0.171875 16.4894 0.171875C16.5742 0.171875 16.659 0.214132 16.7437 0.214132C17.3372 0.298647 17.9306 0.340904 18.5241 0.467676C26.79 2.07345 32.2158 10.0178 30.7746 18.258C29.5453 25.3995 23.4836 30.7662 16.1927 31.062C12.3353 31.231 8.85934 30.1323 5.84971 27.7236C2.79769 25.315 0.932563 22.1457 0.211946 18.258C0.127168 17.7087 0.0423892 17.1593 0 16.61C0 15.9761 0 15.3423 0 14.6661C0.0423892 14.4548 0.0423892 14.2858 0.0847784 14.0745C0.423892 10.7362 1.69557 7.82045 3.98459 5.32727C6.35838 2.66506 9.32563 1.01702 12.8863 0.425419C13.4374 0.298647 13.9884 0.25639 14.5395 0.171875ZM17.2948 12.5955C17.2948 11.5391 17.2524 10.5249 17.2948 9.46848C17.3372 8.58108 17.8459 8.11625 18.736 8.07399C19.499 8.03174 20.262 8.03174 21.025 8.03174C21.1522 8.03174 21.2794 8.03174 21.4065 8.03174C21.4065 6.76402 21.4065 5.53855 21.4065 4.27083C20.1773 4.27083 18.9904 4.22858 17.8035 4.27083C15.1329 4.39761 13.3526 6.13016 13.1407 8.79237C13.0559 9.93332 13.0983 11.0743 13.0983 12.2152C13.0983 12.342 13.0983 12.4688 13.0983 12.5955C11.9114 12.5955 10.7669 12.5955 9.62235 12.5955C9.62235 12.68 9.57996 12.7223 9.57996 12.7646C9.57996 13.99 9.57996 15.2155 9.57996 16.3987C9.57996 16.6522 9.70713 16.61 9.87669 16.61C10.8516 16.61 11.7842 16.61 12.7592 16.61C12.8863 16.61 12.9711 16.61 13.0983 16.61C13.0983 20.0751 13.0983 23.4979 13.0983 26.963C14.4971 26.963 15.8536 26.963 17.2524 26.963C17.2524 23.4979 17.2524 20.0751 17.2524 16.61C18.6089 16.61 19.9229 16.61 21.237 16.61C21.237 15.2577 21.237 13.9478 21.237 12.5533C19.9229 12.5955 18.6089 12.5955 17.2948 12.5955Z" fill="#00AEE9"/>
                                                </svg>
                                        </a>
                                    </div>
                                <?php endif; ?>
                                <?php if( $social_links['linkedin'] != '
                                '): ?>
                                    <div class="social-link ln-link">
                                        <a href="<?php echo $social_links['linkedin']; ?>">
                                            <svg width="31" height="31" viewBox="0 0 31 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M14.2541 0.171875C14.8899 0.171875 15.5258 0.171875 16.1616 0.171875C16.2464 0.171875 16.3312 0.214132 16.3735 0.214132C18.7473 0.383162 20.9516 1.05928 22.9863 2.28474C26.8861 4.69341 29.3022 8.15851 30.15 12.68C30.2348 13.2294 30.3196 13.7787 30.362 14.3281C30.362 14.9619 30.362 15.5958 30.362 16.2297C30.3196 16.61 30.2772 16.948 30.2348 17.3283C29.6414 21.385 27.7339 24.7234 24.4699 27.2588C21.1211 29.8365 17.3061 30.8507 13.152 30.3013C9.59126 29.8365 6.53924 28.273 4.08067 25.6108C0.859089 22.1034 -0.454978 17.9622 0.138471 13.2716C0.519974 10.2291 1.74926 7.56691 3.78395 5.32727C6.15774 2.66506 9.0826 1.01702 12.6009 0.425419C13.152 0.298647 13.703 0.25639 14.2541 0.171875ZM24.1308 23.0331C24.1308 22.9486 24.1308 22.8641 24.1308 22.7795C24.1308 20.7512 24.1308 18.7228 24.1308 16.6945C24.1308 16.2719 24.0884 15.8916 24.046 15.469C23.7917 13.3139 22.4776 11.9617 20.4005 11.7081C18.8745 11.5391 17.6028 12.0039 16.7127 13.2716C16.6703 13.3139 16.6279 13.3562 16.5431 13.4407C16.5431 12.8913 16.5431 12.4265 16.5431 11.9194C15.3138 11.9194 14.0845 11.9194 12.8552 11.9194C12.8552 15.6381 12.8552 19.3144 12.8552 22.9908C14.0845 22.9908 15.3138 22.9908 16.5431 22.9908C16.5431 22.8641 16.5431 22.7373 16.5431 22.6105C16.5431 21.0892 16.5431 19.6102 16.5431 18.089C16.5431 17.5396 16.5431 16.9903 16.5855 16.4409C16.6279 15.7648 16.967 15.2577 17.4757 14.8774C18.5354 14.159 19.9342 14.6239 20.2733 15.8493C20.4005 16.2719 20.4429 16.6945 20.4429 17.1171C20.4429 18.9764 20.4429 20.7934 20.4429 22.6528C20.4429 22.7373 20.4429 22.8641 20.4429 22.9908C21.6722 23.0331 22.8591 23.0331 24.1308 23.0331ZM7.13269 11.9617C7.13269 15.6803 7.13269 19.3567 7.13269 23.0331C8.36198 23.0331 9.59126 23.0331 10.8205 23.0331C10.8205 22.9063 10.8205 22.7795 10.8205 22.6528C10.8205 19.2722 10.8205 15.8916 10.8205 12.5533C10.8205 12.4265 10.8205 12.342 10.8205 12.2152C10.8629 12.0039 10.7358 11.9194 10.5238 11.9194C9.54887 11.9194 8.53153 11.9194 7.55658 11.9194C7.42941 11.9617 7.25986 11.9617 7.13269 11.9617ZM6.87836 8.53882C6.87836 9.67977 7.72614 10.4827 8.95543 10.4404C10.1847 10.4404 11.0325 9.63751 11.0325 8.53882C11.0325 7.39788 10.1847 6.59499 8.95543 6.59499C7.76853 6.59499 6.87836 7.39788 6.87836 8.53882Z" fill="#00AEE9"/>
                                            </svg>
                                        </a>
                                    </div>
                                <?php endif; ?>
                            </div>
                        </div>                        
                    </div>
                <div class="column right-column">
                    <div class="right-navigation">
                        <div class="navigation-wrap">
                            <div class="columns display-flex">
                                <div class="column-wrap">
                                    <div class="icon-wrap reg-wrap">
                                        <?php 
                                            $reg_icon = get_field('registration_icon', 'option'); 
                                            if( $reg_icon ):
                                        ?>
                                            <a href="<?php echo get_field('registration_link', 'option'); ?>" target="_blank">
                                                <img src="<?php echo $reg_icon['url']; ?>" alt="<?php echo $reg_icon['alt']; ?>">
                                                <span>registration</span>
                                            </a>                                       
                                        <?php
                                            endif;
                                        ?>
                                    </div>
                                </div>
                                <div class="column-wrap">
                                    <div class="icon-wrap par-wrap">
                                        <?php 
                                            $part_icon = get_field('partnership_icon', 'option'); 
                                            if( $reg_icon ):
                                        ?>
                                            <a href="<?php echo get_field('partnership_link', 'option'); ?>" target="_blank">
                                                <img src="<?php echo $part_icon['url']; ?>" alt="<?php echo $part_icon['alt']; ?>">
                                                <span>partnership</span>
                                            </a>                                       
                                        <?php
                                            endif;
                                        ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>                
    </div>
</footer>
    <div class="img-background-main">
        <img src="<?php echo TEMPLATE_DIRECTORY_URI .'/assets/images/background_4_footer.jpg'?>" alt="">
    </div>
</main> 
<?php wp_footer(); ?>
</body>
</html>
