import React, { useState } from 'react';
import { Form, Button } from 'react-bootstrap';
import Select from 'react-select';
import PhoneInput from 'react-phone-input-2';
import 'react-phone-input-2/lib/style.css';
import Modal from 'react-modal';
import styled from 'styled-components';
import ReCaptCha from '../assets/images/recaptcha.png';
import EnterBg from '../assets/images/enterBg.png';

const customStyles = {
  content: {
    top: '50%',
    left: '50%',
    right: 'auto',
    bottom: 'auto',
    marginRight: '-50%',
    transform: 'translate(-50%, -50%)',
  },
};

const RegisterForm = () => {
  const [modalIsOpen, setIsOpen] = useState(false);

  const options = [
    { value: 'chocolate', label: 'Chocolate' },
    { value: 'strawberry', label: 'Strawberry' },
    { value: 'vanilla', label: 'Vanilla' }
  ]
  

  function openModal() {
    setIsOpen(true);
  }

  // function afterOpenModal() {
  //   subtitle.style.color = '#f00';
  // }

  function closeModal() {
    setIsOpen(false);
  }

  return (
    <ComponentWrapper>
      <Form className='formWrapper'>
        <Form.Group className="mb-3" controlId="formGroupEmail">
          <Form.Label className='fontLabel'>FIRST NAME</Form.Label>
          <Form.Control type="text"/>
        </Form.Group>
        <Form.Group className="mb-3" controlId="formGroupPassword">
          <Form.Label className='fontLabel'>LAST NAME</Form.Label>
          <Form.Control type="text"/>
        </Form.Group>
        <Form.Group className="mb-3" controlId="formGroupEmail">
          <Form.Label className='fontLabel'>EMAIL</Form.Label>
          <Form.Control type="email"/>
        </Form.Group>
        <Form.Group className="mb-3" controlId="formGroupPassword">
          <Form.Label className='fontLabel'>CONFIRM EMAIL</Form.Label>
          <Form.Control type="text"/>
        </Form.Group>
        <Form.Group className="mb-3" controlId="formGroupEmail">
          <Form.Label className='fontLabel'>SELECT YOUR METRO AREA</Form.Label>
          <Select options={options} />
        </Form.Group>
        <Form.Group className="mb-3" controlId="formGroupPassword">
          <Form.Label className='fontLabel'>ZIP CODE</Form.Label>
          <Form.Control type="text"/>
        </Form.Group>
        <Form.Group className="phoneWrapper" controlId="formGroupPassword">
          <Form.Label className='fontLabel'>PHONE NUMBER <span>(used to contact winers)</span></Form.Label>
          <PhoneInput
            country={'ru'}
            inputProps={{
              name: 'phone',
              required: true,
              autoFocus: true
            }}
            inputStyle={{ width: '83%' }}
          />
        </Form.Group>
        <div style = {{ marginTop: 20 }}>
          <Form.Check type='checkbox' className='checkbox-content'>
            <Form.Check.Input type='checkbox' isValid />
            <Form.Check.Label>I aggree to the <span style = {{ color: 'red', cursor: 'pointer', textDecoration: 'underline' }} onClick={openModal}>Official Rules.</span></Form.Check.Label>
            <Modal
              isOpen={modalIsOpen}
              ariaHideApp={false}
              onRequestClose={closeModal}
              style={customStyles}
              contentLabel="Example Modal"
            >
              <button style = {{float: 'right'}} onClick={closeModal}>close</button>
              <h2>Live Nation Entertainment Privacy Policy - Official Rules</h2>
            </Modal>
          </Form.Check>
          <Form.Check type='checkbox' className='checkbox-content'>
            <Form.Check.Input type='checkbox' isValid />
            <Form.Check.Label>Yes I would like receive special offers from GNC.<span style = {{ color: 'red' }}>*</span></Form.Check.Label>
          </Form.Check>
          <Form.Check type='checkbox' className='checkbox-content'>
            <Form.Check.Input type='checkbox' isValid />
            <Form.Check.Label>Yes, I would like concert information from Live Nation<span style = {{ color: 'red' }}>*</span></Form.Check.Label>
          </Form.Check>
        </div>
        <div className='submit-wrapper'>
          <div className='recapchar'>
            <Form.Label><span style = {{ color: 'red' }}>*</span>Optional</Form.Label>
            <img src={ReCaptCha} alt='recaptcha'/>
          </div>
          <button className='submit_btn'>ENTER NOW</button>
        </div>
      </Form>
    </ComponentWrapper>
  )
};

const ComponentWrapper = styled.div`
  display: flex;
  width: 100%;
  background-color: white;
  box-shadow: 5px 10px rgba(0, 0, 0, 0.5);
  padding: 10px;
  z-index: 0;
  flex: 1;
  margin: 20px 0 0 10px;
  @media only screen and (min-width: 608px) {
    .formWrapper {
      .mb-3 {
        display: inline-block;
        width: 31%;
        margin: 5px !important;
        .fontLabel {
          font-weight: bold;
        }
      }
      .phoneWrapper {
        margin-left: 14px;
        .fontLabel {
          font-weight: bold;
        }
        input {
          width: 47%;
        }
      }
      .checkbox-content {
        display: flex;
        input {
          border-color: black;
        }
        label {
          color: black;
        }
      }
      .submit-wrapper {
        display: flex;
        align-items: center;
        justify-content: space-around;
        .submit_btn {
          background-image: url(${EnterBg});
          background-repeat: no-repeat;
          background-size: contain;
          color: white;
          border: 0px;
          padding: 10px;
          margin: 15px auto;
          background-size: cover !important;
        }
      }
    }
  }
  @media only screen and (min-width: 1200px) {
    .formWrapper {
      margin: 0 auto;
      .mb-3 {
        display: inline-block;
        width: 46%;
        margin: 5px !important;
        .fontLabel {
          font-weight: bold;
        }
      }
      .phoneWrapper {
        display: inline-block;
        .fontLabel {
          font-weight: bold;
        }
        input {
          width: 47%;
        }
      }
      .checkbox-content {
        input {
          border-color: black;
        }
        label {
          color: black;
        }
      }
      .submit-wrapper {
        position: relative;
        .recapchar {
          display: flex;
          flex-direction: column;
          img {
            width: 45%;
          }
        }
        .submit_btn {
          background-image: url(${EnterBg});
          background-repeat: no-repeat;
          height: 62px;
          position: absolute;
          right: -22px;
          top: 20px;
          font-size: 21px;
          color: white;
          padding: 10px;
          background-color: transparent;
        }
       
      }
    }
  }
`;

export default RegisterForm;
