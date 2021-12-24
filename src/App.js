import React from 'react';
import styled from 'styled-components';
import GNCNavbar from './components/layouts/GNCNavbar';
import RegisterForm from './components/RegisterForm';
import Footer from './components/Footer';

import BannerLogoPng from './assets/images/banner-logo.png';
import RedBannerPng from './assets/images/red-banner.png';
import Bg1 from './assets/images/bg-1.jpg';
import Card from './assets/images/card.png';
import Dollar from './assets/images/dollar.png';
import Fly from './assets/images/fly.png';

const App = () => {
  return (
    <ComponentWrapper>
      <div className='gnc-container'>
        <GNCNavbar />
        <div className='register-main-content'>
          <div className='register-desc-wrapper'>
            <img
              className='banner-logo'
              src={BannerLogoPng}
              alt='banner logo'
            />
            <div className='red-banner-wrapper'>
              <img src={RedBannerPng} alt='red banner' />
              <p>
                Enter for a chance to win a Rock Flight<sup>®</sup>
                <br />
                to a Live Nation® concert of your choice!<sup>+</sup>
              </p>
            </div>
            <div className='banner-content'>
              <h1 className='banner-title'>1 Grand Prize winner will receive:</h1>
              <div className='banner-description'>
                <div className='banner-info'>
                  <img src={Card} alt='mark'/>
                  <h3>2 tickets to a Live Nation concert in the U.S.<sup>+</sup></h3>
                </div>
                <div className='banner-info'>
                  <img src={Dollar} alt='mark'/>
                  <h3>Airefare & hotel accommodations for 2</h3>
                </div>
                <div className='banner-info'>
                  <img src={Fly} alt='mark'/>
                  <h3>$200 cash gift card </h3>
                </div>
              </div>
            </div>
          </div>
          <RegisterForm />
        </div>
      </div>
      <Footer />
    </ComponentWrapper>
  );
};

const ComponentWrapper = styled.div`
  background-image: url(${Bg1});
  background-size: cover;
  background-repeat: no-repeat;
  background-position: center;
  width: 100%;
  height: 100vh;
  margin-top: -61px;
  .navbar-wrapper {
    flex: 0 0 100%;
  }
  > .gnc-container {
    padding-top: 61px;
    margin: 0 auto;
    display: flex;
    flex-wrap: wrap;
  }

  .register-main-content {
    width: 80%;
    margin: 0 auto;
    display: flex;
    justify-content: center;
    .register-desc-wrapper {
      flex: 1;
      margin-top: 38px;
      .banner-logo {
        width: 75%;
        height: auto;
      }
    }
    .red-banner-wrapper {
      display: flex;
      align-items: center;
      margin-top: 15px;
      p {
        position: absolute;
        top: 34%; 
        font-size: 29px;
        text-shadow: 2px 2px #000000;
        font-family: 'DINCond-Bold';
        color: white;
        z-index: 0;
        // font-size: 40px;
      }
      img {
        position: absolute;
        width: 47%;
        left: 0px;
        top: 34%;
        height: 16%;
      }
    }
    .banner-content {
      position: absolute;
      top: 48%;
      margin-left: 45px;
      .banner-title {
        font-family: 'DINCond-Bold';
        font-size: 30px;
      }
      .banner-description {
        margin-top: -10px;
        .banner-info {
          display: flex;
          align-items: center;
          img {
            width: 25px;
          }
          h3 {
            margin: 5px;
            font-size: 23px;
            font-family: 'DINCond-Bold';
          }
        }
      }
      
    }
  }
`;
export default App;
