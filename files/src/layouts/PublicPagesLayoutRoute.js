import React from 'react';
import { Route, useLocation } from 'react-router-dom';
import { Container, Row, Col } from 'react-bootstrap';
import Navbar from './Navbar';

const PublicPagesLayout = ({ children }) => {
  let location = useLocation();
  return (
    <Container fluid style={{ paddingLeft: 0, paddingRight: 0, overflow: 'hidden' }}>
      <Navbar isLayoutTransparent={false} locationName={location.pathname} />
      <Row>
        <Col>
          {children}
        </Col>
      </Row>
    </Container>
  );
}

const PublicPagesLayoutRoute = ({ component: Component, ...rest }) => {

  return (
    <Route {...rest} render={matchProps => (
      <PublicPagesLayout>
        <Component {...matchProps} />
      </PublicPagesLayout>
    )} />
  )
};

export default PublicPagesLayoutRoute;