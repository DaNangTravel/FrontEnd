$(function () {
  'use strict';

  const pathname = '/' + window.trimSlash(window.location.pathname);

//auth
  if (/^\/admin\/login$/.test(pathname)) {
    require('./auth/login');
    return;
  }

  if (/^\/admin\/register$/.test(pathname)) {
    require('./auth/register');
    return;
  }

  if (/^\/admin\/forget-password$/.test(pathname)) {
    require('./auth/forget');
    return;
  }

  if (/^\/admin\/forget-password\/change-password\/(.*)$/.test(pathname)) {
    require('./auth/change_password');
    return;
  }

//posts
  if (/^\/admin\/posts$/.test(pathname)) {
    require('./posts/index');
    return;
  }

  if (/^\/admin\/posts\/create$/.test(pathname)) {
    require('./posts/create');
    return;
  }

  if (/^\/admin\/posts\/update\/(.*)$/.test(pathname)) {
    require('./posts/update');
    return;
  }

// profile
  if (/^\/admin\/profile$/.test(pathname)) {
    require('./profile/index');
    return;
  }

// tags
  if (/^\/admin\/tags$/.test(pathname)) {
    require('./tags/index');
    return;
  }

// categories
  if (/^\/admin\/categories$/.test(pathname)) {
    require('./categories/index');
    return;
  }

// cong tac vien
  if (/^\/admin\/congtacvien$/.test(pathname)) {
    require('./cong_tac_vien/index');
    return;
  }

  if (/^\/admin\/congtacvien\/credential$/.test(pathname)) {
    require('./cong_tac_vien/credential');
    return;
  }

// cong tac vien
  if (/^\/admin\/feedbacks$/.test(pathname)) {
    require('./feedbacks/index');
    return;
  }

// statistic
  if (/^\/admin\/statistics\/post$/.test(pathname)) {
    require('./statistic/post');
    return;
  }

  // dashboard
  if (/^\/admin\/dashboard$/.test(pathname)) {
    require('./dashboard/index');
    return;
  }
});
