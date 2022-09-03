import React, { useEffect, useState } from "react";
import { useHistory } from "react-router-dom";
import {
  anniversaireData,
  maraigeData,
  profesionnelData,
  religieuxData,
} from "../../../../constants";
import EventsNavbar from "../../../reusable/EventsNavbar";
import { isBrowser, isMobile, isTablet } from "react-device-detect";

const DetailEventsNavbar = (props) => {
  const history = useHistory();
  const [stickyBarTop, setstickyBarTop] = useState(undefined);
  const [stickySidebar, setStickySidebar] = useState(undefined);

  useEffect(() => {
    const stickyBarEl = document
      .querySelector(".stickyBar")
      .getBoundingClientRect();
    setstickyBarTop(stickyBarEl.top);
  }, []);
  useEffect(() => {
    const stickySideBarEl = document
      .querySelector(".stickySideBar")
      .getBoundingClientRect();
    setStickySidebar(stickySideBarEl.top);
  }, []);

  useEffect(() => {
    if (!stickyBarTop) return;
    window.addEventListener("scroll", isSticky);

    return () => {
      window.removeEventListener("scroll", isSticky);
    };
  }, [stickyBarTop]);

  const isSticky = (e) => {
    const stickyBarEl = document.querySelector(".stickyBar");
    const scrollTop = window.scrollY;
    let check;
    if (isTablet) {
      check = scrollTop >= stickyBarTop - 10;
    } else if (isMobile) {
      check = scrollTop >= stickyBarTop + 200;
    } else {
      check = scrollTop >= stickyBarTop - 10;
    }
    if (scrollTop < 1) {
      check = false;
    }
    if (check) {
      stickyBarEl.classList.add("is-sticky");
    } else {
      stickyBarEl.classList.remove("is-sticky");
    }
  };

  useEffect(() => {
    const stickyBarEl = document.querySelector(".clt-section-2-divs.active");
    stickyBarEl.scrollIntoView({
      behavior: "smooth",
      block: "center",
      inline: "end",
    });
  },[]);
  useEffect(() => {
    if (!stickySidebar) return;

    window.addEventListener("scroll", isSidebarSticky);
    return () => {
      window.removeEventListener("scroll", isSidebarSticky);
    };
  }, [stickySidebar]);

  const isSidebarSticky = (e) => {
    const stickySideBarEl = document.querySelector(".stickySideBar");
    const scrollTop = window.scrollY;
    let check;
    if (isTablet) {
      check = false;
    } else if (isMobile) {
      check = false;
    } else {
      check = scrollTop >= stickySidebar - 10;
    }
    if (scrollTop < 1) {
      check = false;
    }
    if (check) {
      stickySideBarEl.classList.add("is-sticky");
    } else {
      stickySideBarEl.classList.remove("is-sticky");
    }
  };
  return (
    <EventsNavbar
      eventType={props.eventType}
      setEventTypeMaraige={() => {
        history.push(`/detail/${maraigeData.detail_page}`);
        window.scrollTo(0, 0);
      }}
      setEventTypeAnniversaire={() => {
        history.push(`/detail/${anniversaireData.detail_page}`);
        window.scrollTo(0, 0);
      }}
      setEventTypeReligieux={() => {
        history.push(`/detail/${religieuxData.detail_page}`);
        window.scrollTo(0, 0);
      }}
      setEventTypeProfesionnel={() => {
        history.push(`/detail/${profesionnelData.detail_page}`);
        window.scrollTo(0, 0);
      }}
    />
  );
};

export default DetailEventsNavbar;
