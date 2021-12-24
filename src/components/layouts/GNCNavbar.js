import React from 'react';
import styled from 'styled-components';
import LogoPng from '../../assets/images/logo.png';
import LiveNationPng from '../../assets/images/live-nation.png';
import FacebookIconPng from '../../assets/images/facebook-icon.png';
import TwitterIconPng from '../../assets/images/twitter-icon.png';

const GNCNavbar = ({ wrapperClass = '' }) => {
  return (
    <ComponentContainer className={wrapperClass}>
      <div className='logo-link'>
        <img src={LogoPng} alt='logo' />
      </div>
      <div className='live-nation-link'>
        <img src={LiveNationPng} alt='live nation' />
      </div>
      <div className='share-wrapper'>
        <label className='gnc-label'>SHARE</label>
        <button className='btn-social btn-facebook'>
          <img src={FacebookIconPng} alt='facebook icon' />
        </button>
        <button className='btn-social btn-twitter'>
          <img src={TwitterIconPng} alt='twitter icon' />
        </button>
      </div>
    </ComponentContainer>
  );
};

const ComponentContainer = styled.div`
  display: flex;
  align-items: center;
  width: 80%;
  height: 45px;
  background-color: #000;
  border-bottom: 4px solid #d71921;
  margin: 0 auto;
  .logo-link {
    display: block;
    cursor: pointer;
    width: 113px;
    height: 34px;
    margin-left: 30px;
    img {
      width: 100%;
      height: 100%;
    }
  }
  .live-nation-link {
    display: block;
    cursor: pointer;
    width: 112px;
    height: 29px;
    margin-left: 20px;
    margin-right: 20px;
    img {
      width: 100%;
      height: 100%;
    }
  }
  .share-wrapper {
    display: flex;
    align-items: center;
    background-color: #d71921;
    padding: 0 17px 0 20px;
    height: 100%;
    margin-left: auto;

    .gnc-label {
      color: white;
      margin-right: 8px;
    }
    .btn-social {
      width: 40px;
      height: 40px;
      display: flex;
      align-items: center;
      justify-content: center;
      padding: 0;
      border: 1px solid rgba(57, 88, 158, 0.5);
      margin-left: 5px;
      cursor: pointer;
      &.btn-facebook {
        background-color: #39589e;
        img {
          width: 9px;
          height: 19px;
        }
      }
      &.btn-twitter {
        background-color: #00abf3;
        img {
          width: 18px;
          height: 15px;
        }
      }
    }
  }
`;

export default GNCNavbar;
