import React from "react";
import { Route } from "react-router-dom";
import { Container } from "react-bootstrap";

const PublicLayout = ({ children }) => (
  <Container
    fluid
    style={{ paddingLeft: 0, paddingRight: 0, overflow: "hidden" }}
  >
    {children}
  </Container>
);

const PublicInnerLayoutRoute = ({ component: Component, ...rest }) => {
  return (
    <Route
      {...rest}
      render={(matchProps) => (
        <PublicLayout>
          <Component {...matchProps} />
        </PublicLayout>
      )}
    />
  );
};

export default PublicInnerLayoutRoute;
