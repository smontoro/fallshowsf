<?php /* Template Name: FAQ */
get_header();

while (have_posts()) :
    the_post();

    $faq_image= get_field('faq_image');
    $faq_nav= get_field('faq_nav');

    vertoh_include_page_header();
    ?>

<section class="page-padding container" id="faq">
    <header class="section-header">
            <h2 class="page-title"><?php the_title() ?></h2>
    </header>

    <div id="faqPrimary">
        <div><?php echo $faq_nav; ?></div>
        <img class="image-fluid" src="<?php echo $faq_image; ?>">
    </div>

    <section id="faqSecondary">
        <div id="location">
            <h3>Location</h3>
            <img class="alignnone size-full wp-image-1020" src="http://fallshowsf.local/wp-content/uploads/2018/08/information.png" alt="" width="24" height="24" /> 
            <h4>Where is the Show and Preview Gala?</h4>
            <div>
                THE SAN FRANCISCO FALL ART & ANTIQUES SHOW is held at Festival Pavilion in Fort Mason Center.
                <br>
                <br>
                Fort Mason Center is located in the beautiful Marina District, between Fisherman's Wharf and the Golden Gate Bridge on San Francisco Bay. The entrance to Fort Mason Center is at the intersection of Marina Boulevard and Buchanan Street. A former military base, this National Historic Landmark is part of the Golden Gate National Recreation Area and therefore has no street address.
            </div>
        </div>

        <div id="hours">
            <h3>Hours</h3>
            <div>
                <strong>Preview Gala</strong>
                <br>
                Wednesday, October 10, 2018
                <br>
                7:00 to 10:00 p.m. - Gala4:00 to 7:00 p.m. - Patron Receptions
                <br>
                <br>
                <strong>2018 Show Dates</strong>
                <br>
                October 11 to October 14, 2018
                <br>
                Thursday - Saturday, 10:30 a.m. to 7:00 p.m.
                <br>
                Sunday, Noon to 5:00 p.m.
            </div>
        </div>

        <span id="parking"></span>
        <div>
            <h3>Parking</h3>
            <img class="alignnone size-full wp-image-1020" src="http://fallshowsf.local/wp-content/uploads/2018/08/information.png" alt="" width="24" height="24" /> 
            <h4>Is parking available?</h4>
            <div>
                Yes. <a href="http://www.fortmason.org/aboutus/parking.shtml" target="_blank" rel="noopener">Limited paid parking</a> is available within the Fort Mason complex. Due to high attendance, THE SAN FRANCISCO FALL ART &amp; ANTIQUES SHOW is a high-impact parking period.

                The parking fees are reasonable and go directly toward preservation and restoration of historic Fort Mason Center.

                Please do not self-park inside any valet parking area under any circumstances. If you are unsure of the appropriate place to park, check with security once at Fort Mason. Illegally parked cars will be ticketed and towed.

                Free, but very limited, parking is available along Marina Boulevard; however, make sure to carefully read posted parking restrictions.
            </div>
            <img class="alignnone size-full wp-image-1020" src="http://fallshowsf.local/wp-content/uploads/2018/08/information.png" alt="" width="24" height="24" />
            <h4>Is valet parking available?</h4>
            <div>
                Valet parking is available at Festival Pavilion (inside Fort Mason complex) during the Preview Gala and on show days.
            </div>
             <img class="alignnone size-full wp-image-1020" src="http://fallshowsf.local/wp-content/uploads/2018/08/information.png" alt="" width="24" height="24" />
            <h4>How much does valet parking cost?</h4>
            <div>
                Valet parking is free during the Preview Gala for Enthusiasts, Designers and Artisans Circle, Collectors Circle and Connoisseurs Circle patrons.

                For all other guests, shuttle service will be available from nearby lots.

                On show days, valet parking is complimentary to Connoisseurs, Collectors and Designers Circle members. For all others, it is $20 per car.
            </div>
        </div>


        <div class="directions">
            <h3>Directions</h3>
            <img class="alignnone size-full wp-image-1020" src="http://fallshowsf.local/wp-content/uploads/2018/08/information.png" alt="" width="24" height="24" /> 
            <h4>Is Fort Mason easy to find?</h4>
            <div>
                From East Bay: Bay Bridge to Fremont Street Exit; on Fremont (100 yards north) take first right on Howard; left on Embarcadero and go 2 miles; left on Bay and go 2 miles; right on Buchanan. Cross Marina Boulevard and turn sharp right into Fort Mason Center.

                From Peninsula/South Bay: US 101 North to 9th Street Exit; 9th across Market and left on Hayes; right on Franklin; left on Bay; right on Buchanan. Cross Marina Boulevard and sharp right into Fort Mason Center.

                From North Bay: Golden Gate Bridge (US 101) to Marina Exit: Marina Boulevard (1.5 miles) to Buchanan and turn left into Fort Mason Center.
            </div>
            <img class="alignnone size-full wp-image-1020" src="http://fallshowsf.local/wp-content/uploads/2018/08/information.png" alt="" width="24" height="24" />
            <h4>Is there a map available?</h4>
            <div><a href="http://www.fortmason.org/directions/index.shtml" target="_blank" rel="noopener">A map</a> of Fort Mason Center, and the primary transit routes is available on their website.</div>
        </div>

        <div id="publicTrans">
            <h3>Public Transportation</h3>
            <span class="FAQHeading"><img class="alignnone size-full wp-image-1020" src="http://fallshowsf.local/wp-content/uploads/2018/08/information.png" alt="" width="24" height="24" /> 
            <h4>Are there public transit options?</h4>
            <div>
                Yes. We encourage public transportation.
                <br>
                <br>
                For <a href="http://tripplanner.transit.511.org/mtc/XSLT_TRIP_REQUEST2?language=en" target="_blank" rel="noopener">Bay Area-wide transit information</a> call 511 (or 817-1717) from any area code in the Bay Area counties of Alameda, Contra Costa, Marin, Napa, San Francisco, San Mateo, Santa Clara, Solano, and Sonoma. Or, contact one of the following:
                <br>
                East Bay: <a href="http://www.bart.gov/" target="_blank" rel="noopener">Bay Area Rapid Transit (BART)</a>: (510) 465-2278
                <br>
                North Bay: <a href="http://www.goldengate.org/" target="_blank" rel="noopener">Golden Gate Transit</a>: (415) 455-2000
                <br>
                Peninsula/South Bay: <a href="http://www.caltrain.com/" target="_blank" rel="noopener">SamTrans/CalTrain</a>: (800) 660-4287
                <br>
                San Francisco: <a href="http://www.sfmta.com/cms/home/sfmta.php" target="_blank" rel="noopener">Municipal Railway (MUNI)</a>: (415) 673-6864
            </div>
                <img class="alignnone size-full wp-image-1020" src="http://fallshowsf.local/wp-content/uploads/2018/08/information.png" alt="" width="24" height="24" /> 
                <h4>Which San Francisco buses will take me to Fort Mason Center?</h4>
                <div>
                    There are many buses that stop at, or near, Fort Mason Center. Contact <a href="http://www.sfmta.com/cms/home/sfmta.php" target="_blank" rel="noopener">MUNI</a> at (415) 673-6864 for times, or for other transit options.
                    <br>
                    <br>
                    #10 Townsend (stops at Van Ness and Bay, a short walk from Fort Mason)
                    <br>
                    #22 Fillmore (stops at Fillmore and Beach)
                    <br>
                    #28 19th Avenue (stops inside Fort Mason)
                    <br>
                    #30 Stockton (stops at Chestnut and Laguna; stops at the Transbay Bus Terminal)
                    <br>
                    #42 Downtown Loop
                    <br>
                    #47 Van Ness (stops at Van Ness and Bay, a short walk from Fort Mason)
                    <br>
                    #49 Van Ness / Mission (stops at Van Ness and Bay, a short walk from Fort Mason)
                    <br>
                    #82X Presidio/Wharves Express
                </div>
                <img class="alignnone size-full wp-image-1020" src="http://fallshowsf.local/wp-content/uploads/2018/08/information.png" alt="" width="24" height="24" /> 
                <h4>Are taxicabs readily available at Fort Mason Center?</h4>
                <div>Taxis are not readily available at Fort Mason Center. They must be ordered by telephone. Our staff and volunteers are happy to assist you in calling a taxi if needed. Uber and Lyft pick up within Fort Mason Center.</div>
            </div>
        </div>

        <div id="tickets">
            <h3>Tickets</h3>
            <div>
                PLEASE NOTE: TICKETS WILL NOT BE MAILED. ALL TICKETS WILL BE AVAILABLE TO PRINT YOURSELF OR ON YOUR MOBILE PHONE VIA A TICKET CONFIRMATION FROM EVENTBRITE.
            </div>
            <div>100% of net proceeds from all ticket sales benefit the 501(c)(3) non-profit, Enterprise for Youth.</div>
            <img class="alignnone size-full wp-image-1020" src="http://fallshowsf.local/wp-content/uploads/2018/08/information.png" alt="" width="24" height="24" />
            <h4>Can I purchase tickets online?</h4>
            <div>
                Yes, tickets are available for purchase via Eventbrite. Click on the “Purchase Tickets” tab on the left sidebar of this site. You may print your tickets yourself or send to your mobile phone and bring with you.
            </div>
            <img class="alignnone size-full wp-image-1020" src="http://fallshowsf.local/wp-content/uploads/2018/08/information.png" alt="" width="24" height="24" /> 
            <h4>What forms of payment do you accept?</h4>
            <div>
                We accept MasterCard, VISA, American Express, Discover and Personal Checks.
            </div>
            <img class="alignnone size-full wp-image-1020" src="http://fallshowsf.local/wp-content/uploads/2018/08/information.png" alt="" width="24" height="24" />
            <h4>Can I purchase tickets over the phone?</h4>
            <div>Yes, you may order tickets via telephone at (415) 989-9019.</div>
            <img class="alignnone size-full wp-image-1020" src="http://fallshowsf.local/wp-content/uploads/2018/08/information.png" alt="" width="24" height="24" />  
            <h4>Can I pay by check?</h4>
            <div>
                Yes. To pay by check, please RSVP to the Preview Gala invitation or download the Ticket Order form here and send it with your check made out to <strong>The San Francisco Fall Art &amp; Antiques Show</strong> to:
                <br>
                <br>
                San Francisco Fall Art &amp; Antiques Show Tickets
                <br>
                200 Pine Street, Floor 6
                <br>
                San Francisco, CA 94104
            </div>
            <img class="alignnone size-full wp-image-1020" src="http://fallshowsf.local/wp-content/uploads/2018/08/information.png" alt="" width="24" height="24" />  
            <h4>Can I buy a ticket at the door?</h4>
            <div>
                Yes, General Admission tickets are available to purchase at the door for $25. Tickets to the Preview Gala and Lectures can be purchased at the door, but to avoid lines, it is best to <a href="https://www.eventbrite.com/e/the-san-francisco-fall-art-antiques-show-days-lectures-october-11-14-2018-tickets-44468388146" target="_blank" rel="noopener">buy your tickets in advance. </a>
                <br>
                <br>
                Special rate Lunch and Lecture combination tickets are ONLY available in advance by October 1, 2018. Click on "Purchase Tickets" tab or call (415) 989-9019 to reserve.
            </div>
            <img class="alignnone size-full wp-image-1020" src="http://fallshowsf.local/wp-content/uploads/2018/08/information.png" alt="" width="24" height="24" /> 
            <h4>Will you mail me the tickets?</h4>
            <div>
                No. No tickets will be mailed. All tickets are available either to print at home or send to your mobile device. If you pre-purchased tickets, please call (415) 989-9019 with your email address and we will email your tickets.
            </div>
            <img class="alignnone size-full wp-image-1020" src="http://fallshowsf.local/wp-content/uploads/2018/08/information.png" alt="" width="24" height="24" /> 
            <h4>What should I do if I have lost my tickets?</h4>
            <div>
                Instructions on where to find your tickets can be found <a href="http://help.eventbrite.com/customer/en_us/portal/articles/428577" target="_blank" rel="noopener">here</a>.
            </div>
            <img class="alignnone size-full wp-image-1020" src="http://fallshowsf.local/wp-content/uploads/2018/08/information.png" alt="" width="24" height="24" /> 
            <h4>How much does it cost to attend the Show?</h4>
            <div>
                General Admission tickets purchased in advance are $20 per person (includes the Show Catalogue valued at $12), $25 per person at the door.
                <br>
                <br>
                Lectures: $10 each (does not include General Admission)
                <br>
                <br>
                Lecture Series: $85 for the full series (6 lectures, including General Admission)
                <br>
                <br>
                Lunch and Lecture: $65 each (includes a special prix fixe lunch in Café Girandole, lecture of your choice, entrance to the show)
            </div>
            <img class="alignnone size-full wp-image-1020" src="http://fallshowsf.local/wp-content/uploads/2018/08/information.png" alt="" width="24" height="24" /> 
            <h4>Do you offer special rates for groups?</h4>
            <div>
                Yes, we offer group rates for groups of 10 or more:
                <br>
                <br>
                General Admission $15 each (includes the Show Catalogue)
                <br>
                <br>
                After October 1, although your group is still welcome to take advantage of group rates, you will not be able to sign up for Lunch and Lecture.
                <br>
                <br>
                In order to take advantage of group rates, your group must make one payment. In order to take advantage of group rates at the door, your entire group must arrive together and make one payment.
                <br>
                <br>
                Please call (415) 989-9019 to reserve a special group rate.
            </div>
            <img class="alignnone size-full wp-image-1020" src="http://fallshowsf.local/wp-content/uploads/2018/08/information.png" alt="" width="24" height="24" /> 
            <h4>Do you offer special rates for seniors?</h4>
            <div>
                There are no senior rates for this charitable Show benefiting Enterprise for Youth; however, if you would like to take advantage of group rates, we encourage you to speak to your local senior centers, red hat societies, and other social groups about arranging a group outing.
            </div>
            <img class="alignnone size-full wp-image-1020" src="http://fallshowsf.local/wp-content/uploads/2018/08/information.png" alt="" width="24" height="24" /> 
            <h4>Do you offer special rates for children or students?</h4>
            <div>Children under the age of 12 are free. Children 13 and older pay standard general admission fees.

                There are no student rates for this charitable show benefiting Enterprise for Youth; however, if you would like to take advantage of group rates, we encourage you to speak to your teachers or after-school activities leaders about arranging a group outing.
            </div>
            <img class="alignnone size-full wp-image-1020" src="http://fallshowsf.local/wp-content/uploads/2018/08/information.png" alt="" width="24" height="24" /> 
            <h4>Does the Exhibition require a separate admission ticket?</h4>
            <div>No, the Exhibition is included in General Admission and does not require a separate admission ticket.</div>
            <img class="alignnone size-full wp-image-1020" src="http://fallshowsf.local/wp-content/uploads/2018/08/information.png" alt="" width="24" height="24" />
            <h4>What are the benefits associated with the various levels of Patron tickets?</h4>
            <div>
                The most notable difference between the various levels of patrons are the early receptions prior to the Preview Gala on Wednesday, October 10, 2018. Following are a few of the additional highlights:
            </div>
            <div class="faq-ticket-types">
                <h6>Connoisseurs Circle &amp; Internship Sponsor</strong> ($10,000 - four tickets) (contribution, less $600,   tax-deductible)
                </h6>
                <ul>
                    <li><strong>All of the benefits of the Connoisseurs Circle plus:</strong></li>
                    <li>2 additional tickets to the Preview Gala (4 total)</li>
                    <li>Sponsor 2 Enterprise Internships in the arts, design, nonprofit, or government fields</li>
                    <li>Special listing in the Catalogue for Internship Sponsors</li>
                </ul>
                <br>
                <h6>Connoisseurs Circle </strong>($5,000 - two tickets) (contribution, less $300, tax-deductible)</h6>
                <ul>
                    <li>Lead name placement in Show Gala invitation and Catalogue*</li>
                    <li>Earliest entry to Opening Night Preview Gala at 4:00 p.m.</li>
                    <li>Courtesy valet parking for the Preview Gala and all show days</li>
                    <li>Unlimited entry for 4 for all show days</li>
                    <li>Invitation to the Chairman's Luncheon on Thursday, October 11</li>
                    <li>2 tickets to all 6 lectures. Must reserve your seats in advance.</li>
                    <li>Invitations to exclusive parties</li>
                    <li>A special Connoisseurs gift</li>
                </ul>
                <br>
                <h6>Collectors Circle</strong> ($3,000 - two tickets) (contribution, less $300, tax-deductible)</h6>
                <ul>
                    <li>Premier name placement in Show Gala invitation and Catalogue*</li>
                    <li>Earliest entry to Opening Night Preview Gala at 4:00 p.m.</li>
                    <li>Courtesy valet parking for the Preview Gala and all show days</li>
                    <li>Unlimited entry for 2 for all show days</li>
                    <li>Invitation to the Chairman's Luncheon on Thursday, October 11</li>
                    <li>2 tickets to 4 lectures. Must reserve your seats in advance.</li>
                    <li>Invitations to exclusive parties</li>
                </ul>
                <br>
                <h6>Patrons Circle </strong>($2,000 - two tickets) (contribution, less $300, tax-deductible)</h6>
                <ul>
                    <li>Principal name placement in Show Gala invitation and Catalogue*</li>
                    <li>Early entry to Opening Night Preview Gala at 5:00 p.m.</li>
                    <li>Courtesy valet parking for the Preview Gala and all show days</li>
                    <li>Unlimited entry for 2 for all show days</li>
                    <li>2 tickets to 2 lectures. Must reserve your seats in advance.</li>
                    <li>Invitations to exclusive parties</li>
                </ul>
                <br>
                <h6>Enthusiasts</strong> ($800 - two tickets, or $500 - one ticket) (contribution, less $300, tax-deductible)</h6>
                <ul>
                    <li>Your name printed in Show Gala invitation and Catalogue*</li>
                    <li>6:00 p.m. entry to Opening Night Preview Gala</li>
                    <li>Courtesy valet parking for the Opening Night Preview Gala</li>
                    <li>Unlimited entry for 2 for all show days</li>
                    <li>2 tickets to 1 lecture. Must reserve your seats in advance.</li>
                    <li>Invitations to exclusive parties</li>
                </ul>
                <br>
                <h6>Young Collectors </strong>($600 - two tickets; $350 - one ticket) (contribution, less $85 per ticket, tax-deductible)</h6>
                <strong><em>Open to those between the ages of 21 and 40</em></strong>
                <ul>
                    <li>Your name printed in Show Gala invitation and Catalogue*</li>
                    <li>7:00 p.m. entry to Opening Night Preview Gala</li>
                    <li>Invitation to a special panel discussion at The Battery in September</li>
                    <li>Unlimited entry for all show days</li>
                    <li>Shuttle parking from nearby Fort Mason for the Preview Gala</li>
                    <li>1 tickets to 1 lecture. Must reserve your seats in advance.</li>
                </ul>
                <br>
                <h6>Supporter </strong>($500 - two tickets; $300 - one ticket) (contribution, less $85 per ticket, tax-deductible)</h6>
                <ul>
                    <li>7:00 p.m. entry to Opening Night Preview Gala</li>
                    <li>Unlimited entry for all show days</li>
                    <li>Shuttle parking from nearby Fort Mason for the Preview Gala</li>
                </ul>
            </div>
            <em>*Orders received by July 18, 2018, will be listed in the Show Catalogue and Preview Gala invitation. </em>
        </div>

        <div id="lectures">
            <h3>Lectures</h3>
            <img class="alignnone size-full wp-image-1020" src="http://fallshowsf.local/wp-content/uploads/2018/08/information.png" alt="" width="24" height="24" />
            <h4>What are the dates and times of the 2018 Lecture Series?</h4>
            <div>
                Thursday, Oct. 11 - Saturday, Oct. 13, 11 a.m. and 2:30 p.m.;  For more information, see our <a href="http://sffas.org/programs">Programs page</a>
            </div>
        </div>

        <div id="exhibition">
            <h3>Exhibition</h3>
            <img class="alignnone size-full wp-image-1020" src="http://fallshowsf.local/wp-content/uploads/2018/08/information.png" alt="" width="24" height="24" /> 
            <h4>Will there be a Loan Exhibit?</h4>
            <div>
                No. The Designer Vignettes in the Grand Entry Hall will showcase the theme. Prominent designers are selected to bring the theme to life with beautiful designs incorporating pieces from the Exhibitors.
            </div>
            <img class="alignnone size-full wp-image-1020" src="http://fallshowsf.local/wp-content/uploads/2018/08/information.png" alt="" width="24" height="24" /> 
            <h4>What is the 2018 theme?</h4>
            <div>
                THE SUN, THE MOON &amp; THE STARS: Celestial Imagery in Art, Antiques &amp; Design</div>
            </div>
        </div>

        <div id="antiques">
             <h3>Antiques</h3>
             <img class="alignnone size-full wp-image-1020" src="http://fallshowsf.local/wp-content/uploads/2018/08/information.png" alt="" width="24" height="24" /> 
             <h4>What periods/specialties are represented at the Show?</h4>
             <div>
                The Show strives to present to the public a wide selection of furniture and objects in a broad range of prices and a diverse range of styles, tastes and periods. The Show regularly includes dealers in the following specialties:
            </div>
            <div>
                 <ul>
                    <li>Antiquities</li>
                    <li>Asian Decorative and Fine Arts</li>
                    <li>Books, Documents, and Manuscripts</li>
                    <li>Carpets, Rugs, and Textiles</li>
                    <li>Clocks and Scientific Instruments</li>
                    <li>English Furniture</li>
                    <li>Ethnographic Art</li>
                    <li>European and American Ceramics and Glass, Chinese Export Porcelains</li>
                    <li>European Furniture</li>
                    <li>Fine Art - Paintings and Sculpture</li>
                    <li>Fine Art - Photographs</li>
                    <li>Fine Art - Prints and Maps</li>
                    <li>Folk Art</li>
                    <li>Furniture of the Americas</li>
                    <li>Jewelry</li>
                    <li>Metals - Silver</li>
                    <li>Metals - Base Metals: Brass, Pewter, etc.</li>
                    <li>Modern Art-Paintings</li>
                    <li>Objets de Vertu - Enamels, Miniatures, Snuff Boxes, etc.</li>
                    <li>20th-Century Furniture and Works of Art - Arts &amp; Crafts, Art Nouveau, Art Deco, Mid-century Modern</li>
                    <li>Works on Paper</li>
                </ul>
            </div>
            <img class="alignnone size-full wp-image-1020" src="http://fallshowsf.local/wp-content/uploads/2018/08/information.png" alt="" width="24" height="24" />
            <h4>Can I bring my antiques to the Show to be appraised, sold, or traded?</h4>
            <div>
                No. The Show is only for Exhibitors to sell to the public. Independent parties attempting to sell merchandise to Exhibitors will be removed by security and barred admittance.
            </div>
        </div>

        <div id="exhibitors">
            <h3>Exhibitors</h3>
            <h4>How do I become an Exhibitor at the Show?</h4>
            <div>
                The Show is a vetted fair with top caliber exhibitors who maintain high standards. Exhibitors are invited primarily on the basis of their reputations in the trade in their respective disciplines, through recommendations of our Advisory Committee, and by onsite visits to prospective exhibitors' shops/galleries.
                <br>
                <br>
                For consideration to participate in the 2018 Show, please fill out the <a href="http://www.sffas.org/app">Exhibitor Application here</a>. Please include photographs of antiques or art representative of your merchandise, photographs of your booth at other Shows or Fairs, and any recent press you may have received.
            </div>
        </div>

        <div id="designers">
            <h3>Designers</h3>
            <img class="alignnone size-full wp-image-1020" src="http://fallshowsf.local/wp-content/uploads/2018/08/information.png" alt="" width="24" height="24" /> 
            <h4>How do I join the Designers Circle?</h4>
            <div>
                The San Francisco Fall Art &amp; Antiques Show Designers Circle (DC) was established in 1999 as a dedicated group of design industry leaders in support of the show and the beneficiary charity. DC membership is by invitation only to established, credentialed, professional designers and architects in the Bay Area and across the country. Membership is based on past support of The San Francisco Fall Art &amp; Antiques Show, and all members must be in good standing within the design industry. Members are required to have an established body of work (visible through a website or portfolio) and/or two recommendations from members of the DC and /or participating Show dealers. Other individuals or companies who work within the trade in support of interior designers and architects, such as art galleries, furnishing showrooms, contractors, etc., are encouraged to join one of the other patron groups.
            </div>
        </div>

        <div id="catalogue">
            <h3>Catalogue</h3>
            <img class="alignnone size-full wp-image-1020" src="http://fallshowsf.local/wp-content/uploads/2018/08/information.png" alt="" width="24" height="24" />
            <h4>Is there a charge for the Catalogue?</h4>
            <div>
                The cost of the catalogue is included with the purchase of a General Admission ticket.
                <br>
                <br>
                If you do not attend the Show, the price for the Catalogue is $12, plus shipping and handling. Contact the Show Office at (415) 989-9019 or <a href="mailto:sffas@enterpriseforyouth.org?subject=FAQ%20website%20Inquiry">sffas@enterpriseforyouth.org</a> to order a Catalogue.
            </div>
            <img class="alignnone size-full wp-image-1020" src="http://fallshowsf.local/wp-content/uploads/2018/08/information.png" alt="" width="24" height="24" /> 
            <h4>How do I advertise in the Show Catalogue?</h4>
            <div>Go to the<a href="http://www.sffas.org/catalogue-advertising"> Catalogue Advertising page</a> of the website, download the contract and send it along with the specified materials and payment.</div>
        </div>

        <div id="food">
            <h3>Food and Beverage</h3>
            <img class="alignnone size-full wp-image-1020" src="http://fallshowsf.local/wp-content/uploads/2018/08/information.png" alt="" width="24" height="24" /> 
            <h4>What are the dining choices offered at the Show?</h4>
            <div>
                Café Girandole, located in the center of the Show, is a seated dining area that offers a selection of gourmet luncheon fare including an excellent selection of soups, entrees, and desserts, along with a curated wine list.
                <br>
                <br>
                On Sunday there will be a special Champagne Buffet Brunch from noon to 2 p.m.
                <br>
                <br>
                All catering provided by <a href="http://mccallssf.com/" target="_blank" rel="noopener">McCalls</a> Catering and Events.
            </div>
            <img class="alignnone size-full wp-image-1020" src="http://fallshowsf.local/wp-content/uploads/2018/08/information.png" alt="" width="24" height="24" />
            <h4>Can I make a reservation at Café Girandole?</h4>
            <div>
                On-site reservations are accepted; however, telephone reservations are not accepted.
            </div>
        </div>

        <div id="dress">
            <h3>Dress Code</h3>
            <img class="alignnone size-full wp-image-1020" src="http://fallshowsf.local/wp-content/uploads/2018/08/information.png" alt="" width="24" height="24" />
            <h4>Is there a dress code for the Preview Gala?</h4>
            <div>
               Yes. The Preview Gala is a social event and cocktail dress/suit and tie is the most appropriate attire.
            </div>
        </div>

        <div class="children">
            <h3>Children</h3>
            <img class="alignnone size-full wp-image-1020" src="http://fallshowsf.local/wp-content/uploads/2018/08/information.png" alt="" width="24" height="24" />
            <h4>Are children allowed?</h4>
            <div>Supervised children are allowed; however, strollers are not permitted inside exhibitor booths.
                <br>
                <br>
                Since alcohol is served at the Preview Gala, children are not recommended. Children attending the party will be charged the full admission price.
            </div>
        </div>

        <div id="wheelchairs">
            <h3>Wheelchairs</h3>
            <h4>Are wheelchairs available?</h4>
            <div>
                There are a limited number of wheelchairs available.  When you arrive, please request a wheelchair.
            </div>
        </div>

        <div id="pets">
            <h3>Pets</h3>
            <img class="alignnone size-full wp-image-1020" src="http://fallshowsf.local/wp-content/uploads/2018/08/information.png" alt="" width="24" height="24" /> 
            <h4>Can I bring my pet?</h4>
            <div>
                Pets are not allowed.
                <br>
                <br>
                Guide dogs and other types of service animals are protected by the Americans with Disabilities Act, and therefore may accompany their handlers most places that are open to the public.</div>
        </div>

        <div id="seo">
            <h3>Student Employment Opportunities</h3>
            <img class="alignnone size-full wp-image-1020" src="http://fallshowsf.local/wp-content/uploads/2018/08/information.png" alt="" width="24" height="24" /> 
            <h4>What jobs are available at the Show?</h4>
            <div>
                There are two primary jobs available for students at the Show.
                <ul>
                    <li>Party Assistance - serving food and beverages at the Preview Gala</li>
                    <li>Welcome / Thank You Assistance - helping at the Front Door during the Show</li>
                </ul>
            </div>
            <img class="alignnone size-full wp-image-1020" src="http://fallshowsf.local/wp-content/uploads/2018/08/information.png" alt="" width="24" height="24" />
            <h4>How can I work at the Show?</h4>
            <div>
                In order to sign up for a paid position at the Show, you must be an Enterprise for Youth member who has completed the Party Assistance Workshop.
                <br>
                <br>
                If you are an Enterprise member and would like to sign up to work the Show, please contact the Enterprise office at
                (415) 392-7600 x1.
                <br>
                <br>
                If you are not a member and would like to find out how to become one, please contact the Enterprise office at
                (415) 392-7600 x1.
            </div>
        </div>

        <div id="vo">
            <h3>Volunteer Opportunities</h3>
            <img class="alignnone size-full wp-image-1020" src="http://fallshowsf.local/wp-content/uploads/2018/08/information.png" alt="" width="24" height="24" /> 
            <h4>What volunteer opportunities are available at the Show?</h4>
            <div>
                At the show, there are volunteer positions for Welcome Staffing, Finance Staffing, Lecture Series Staffing, Floor Staffing and Special Events. See our <a href="http://sffas.org/volunteer">Volunteer Page</a>
            </div>
            <img class="alignnone size-full wp-image-1020" src="http://fallshowsf.local/wp-content/uploads/2018/08/information.png" alt="" width="24" height="24" />
            <h4>What volunteer opportunities are available throughout the year?</h4>
            <div>
                You can offer administrative and/or creative skills throughout the year. We are always looking for people who can help for 3 to 4 hours one time only, or a couple of hours a week on an ongoing basis.
                <br>
                <br>
                From teens to seniors, we can accommodate various individuals and groups.
                <br>
                <br>
                This is a great opportunity for a corporate team building project. We would love for you to bring your team over for a couple of hours to help us with things such as bulk mailings.
            </div>
            <img class="alignnone size-full wp-image-1020" src="http://fallshowsf.local/wp-content/uploads/2018/08/information.png" alt="" width="24" height="24" /> 
            <h4>How do I volunteer for the Show?</h4>
            <div>
                See our <a href="http://www.sffas.org/volunteer">Volunteer Page</a> to sign up.
            </div>

        </div>
    </div>
</section>
</section>


    <?php
endwhile;
get_footer();


