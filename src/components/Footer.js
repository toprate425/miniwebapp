import React from 'react';
import styled from 'styled-components';
import FooterBanner from '../assets/images/footer-banner.png';

const Footer = () => {
  return (
    <ComponentWrapper>
      <img src={FooterBanner} alt='footer'/>
      <footer className='footerContent'>
          <p>+Live Nation produced  promoted concert at an owned and operated venue in the U.S. Tickets are subject to program availability, venue capacity and age restrictions.<br />
          NO PURCHASE NECESSARY. Legal U.S. residents 18+, who reside within a 100 mile radius of New York City, NY, Chicago, IL,  Houston, TX, Cleveland, OH or Atlanta, GA. Void where prohibited by law.  Begins at 12:00 PM PT on 2/9/15 and ends at 11:59 PM PT on 3/31/15. See details and <a style = {{ color: 'red' }}>Official Rules.</a> To enter without a GNC Game Code, <a style = {{ color: 'red' }}>Click here</a> for alternative method of entry.<br/>
          The Sponsor of the Sweepstakes is GNC® Holdings Inc. The Administrator of the Sweepstakes is Live Nation Marketing, Inc., 7060 Hollywood Blvd., Los Angeles, CA 90028.
          The Sweepstakes and all accompanying materials are ©2015 Live Nation Worldwide, Inc. Live Nation and Rock Flight are registered trademarks of Live Nation Worldwide, Inc.<br/>
          <a style = {{ color: 'red' }}>Click Here</a> for your nearest GNC location.    |    <a style = {{ color: 'red' }}>Live Nation Privacy Policy</a>    |    <a style = {{ color: 'red' }}>GNC Privacy Policy</a></p>
      </footer>
    </ComponentWrapper>
  )
};

const ComponentWrapper = styled.div`
  position: relative;
  margin-top: -30px;
  width: 100%;
  img {
    width: 100%;
  }
  .footerContent {
    margin-top: -2px;
    background: black;
    padding: 0 30px;
    font-size: 10px;
    color: #a2a2a2;
  }
`;

export default Footer;
