import React from 'react';
import { Route } from 'react-router-dom';
import { Container, Row, Col } from 'react-bootstrap';
import Navbar from './Navbar';

const PublicLayout = ({ children }) => (
  <Container fluid style={{ paddingLeft: 0, paddingRight: 0, overflow: 'hidden' }}>
    <Navbar isLayoutTransparent={true} />
    <Row>
      <Col>
        {children}
      </Col>
    </Row>
  </Container>
);

const PublicLayoutRoute = ({ component: Component, ...rest }) => {
  return (
    <Route {...rest} render={matchProps => (
      <PublicLayout>
        <Component {...matchProps} />
      </PublicLayout>
    )} />
  )
};

export default PublicLayoutRoute;