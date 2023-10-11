@extends('pages.admin.index')

@section('content')
    <section class="container-fluid p-4">
        <div class="row">
            <!-- Page Header -->
            <div class="col-lg-12 col-md-12 col-12">
                <div class="border-bottom pb-3 mb-3 d-flex align-items-center justify-content-between">
                    <div class="">
                        <h1 class="mb-1 h2 fw-bold">All Posts</h1>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a href="admin-dashboard.html">Dashboard</a>
                                </li>
                                <li class="breadcrumb-item"><a href="#">CMS</a></li>
                                <li class="breadcrumb-item active" aria-current="page">
                                    All Post
                                </li>
                            </ol>
                        </nav>
                    </div>
                    <div>
                        <a href="#" class="btn btn-primary">New Post</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 col-md-12 col-12">
                <!-- Card -->
                <div class="card rounded-3">
                    <!-- Card Header -->
                    <div class="card-header  p-0">
                        <ul class="nav nav-lb-tab border-bottom-0" id="tab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="all-post-tab" data-bs-toggle="pill" href="#all-post"
                                    role="tab" aria-controls="all-post" aria-selected="true">All</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="published-tab" data-bs-toggle="pill" href="#published"
                                    role="tab" aria-controls="published" aria-selected="false">Published</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="scheduled-tab" data-bs-toggle="pill" href="#scheduled"
                                    role="tab" aria-controls="scheduled" aria-selected="false">Scheduled</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="draft-tab" data-bs-toggle="pill" href="#draft" role="tab"
                                    aria-controls="draft" aria-selected="false">Draft</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="deleted-tab" data-bs-toggle="pill" href="#deleted" role="tab"
                                    aria-controls="deleted" aria-selected="false">Deleted</a>
                            </li>
                        </ul>
                    </div>
                    <div class="p-4 row">
                        <!-- Form -->
                        <form class="d-flex align-items-center col-12 col-md-8 col-lg-3">
                            <span class="position-absolute ps-3 search-icon">
                                <i class="fe fe-search"></i>
                            </span>
                            <input type="search" class="form-control ps-6" placeholder="Search Post" />
                        </form>
                    </div>
                    <div>
                        <div class="tab-content" id="tabContent">
                            <!-- Tab -->
                            <div class="tab-pane fade show active" id="all-post" role="tabpanel"
                                aria-labelledby="all-post-tab">
                                <div class="table-responsive">
                                    <!-- Table -->
                                    <table
                                        class="table mb-0 text-nowrap table-centered table-hover table-with-checkbox table-centered table-hover">
                                        <!-- Table Head -->
                                        <thead class="table-light">
                                            <tr>
                                                <th scope="col">
                                                    <div class="form-check">
                                                        <input type="checkbox" class="form-check-input" id="checkAll" />
                                                        <label class="form-check-label" for="checkAll"></label>
                                                    </div>
                                                </th>
                                                <th scope="col">POST</th>
                                                <th scope="col">TYPE</th>
                                                <th scope="col">CATEGORY</th>
                                                <th scope="col">DATE</th>
                                                <th scope="col">Author</th>
                                                <th scope="col">STATUS</th>
                                                <th scope="col"></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <!-- Table body -->
                                            <tr>
                                                <td>
                                                    <div class="form-check">
                                                        <input type="checkbox" class="form-check-input" id="postOne" />
                                                        <label class="form-check-label" for="postOne"></label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <h5 class="mb-0">
                                                        <a href="#" class="text-inherit">
                                                            Revolutionize how you build the web...
                                                        </a>
                                                    </h5>
                                                </td>
                                                <td>
                                                    <i class="fe fe-image text-primary fs-4"></i>
                                                </td>
                                                <td>
                                                    <a href="#" class="text-inherit">Courses</a>
                                                </td>
                                                <td>7 July, 2021 1:42pm</td>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <img src="../../assets/images/avatar/avatar-7.jpg" alt=""
                                                            class="rounded-circle avatar-xs me-2" />
                                                        <h5 class="mb-0">Reva Yokk</h5>
                                                    </div>
                                                </td>
                                                <td>
                                                    <span
                                                        class="badge-dot bg-warning me-1 d-inline-block align-middle"></span>Draft
                                                </td>
                                                <td>
                                                    <span class="dropdown dropstart">
                                                        <a class="btn-icon btn btn-ghost btn-sm rounded-circle"
                                                            href="#" role="button" id="courseDropdown1"
                                                            data-bs-toggle="dropdown" data-bs-offset="-20,20"
                                                            aria-expanded="false">
                                                            <i class="fe fe-more-vertical"></i>
                                                        </a>
                                                        <span class="dropdown-menu" aria-labelledby="courseDropdown1">
                                                            <span class="dropdown-header">Settings</span>
                                                            <a class="dropdown-item" href="#"><i
                                                                    class="fe fe-edit dropdown-item-icon"></i>Edit</a>
                                                            <a class="dropdown-item" href="#"><i
                                                                    class="fe fe-move dropdown-item-icon"></i>Move</a>
                                                            <a class="dropdown-item" href="#"><i
                                                                    class="fe fe-copy dropdown-item-icon"></i>Copy</a>
                                                            <a class="dropdown-item" href="#"><i
                                                                    class="fe fe-toggle-left dropdown-item-icon"></i>Publish</a>
                                                            <a class="dropdown-item" href="#"><i
                                                                    class="fe fe-toggle-right dropdown-item-icon"></i>Unpublish</a>
                                                            <a class="dropdown-item" href="#"><i
                                                                    class="fe fe-trash dropdown-item-icon"></i>Delete</a>
                                                        </span>
                                                    </span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="form-check">
                                                        <input type="checkbox" class="form-check-input" id="postTwo" />
                                                        <label class="form-check-label" for="postTwo"></label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <h5 class="mb-0">
                                                        <a href="#" class="text-inherit">Guide to Static Sites
                                                            with Gatsby.js
                                                        </a>
                                                    </h5>
                                                </td>
                                                <td>
                                                    <i class="fe fe-video fs-4 text-primary"></i>
                                                </td>
                                                <td>
                                                    <a href="#" class="text-inherit">Marketing</a>
                                                </td>
                                                <td>6 July, 2021 2:42pm</td>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <img src="../../assets/images/avatar/avatar-5.jpg" alt=""
                                                            class="rounded-circle avatar-xs me-2" />
                                                        <h5 class="mb-0">March Menon</h5>
                                                    </div>
                                                </td>
                                                <td>
                                                    <span
                                                        class="badge-dot bg-warning me-1 d-inline-block align-middle"></span>Draft
                                                </td>
                                                <td>
                                                    <span class="dropdown dropstart">
                                                        <a class="btn-icon btn btn-ghost btn-sm rounded-circle"
                                                            href="#" role="button" id="courseDropdown2"
                                                            data-bs-toggle="dropdown" data-bs-offset="-20,20"
                                                            aria-expanded="false">
                                                            <i class="fe fe-more-vertical"></i>
                                                        </a>
                                                        <span class="dropdown-menu" aria-labelledby="courseDropdown2">
                                                            <span class="dropdown-header">Settings</span>
                                                            <a class="dropdown-item" href="#"><i
                                                                    class="fe fe-edit dropdown-item-icon"></i>Edit</a>
                                                            <a class="dropdown-item" href="#"><i
                                                                    class="fe fe-move dropdown-item-icon"></i>Move</a>
                                                            <a class="dropdown-item" href="#"><i
                                                                    class="fe fe-copy dropdown-item-icon"></i>Copy</a>
                                                            <a class="dropdown-item" href="#"><i
                                                                    class="fe fe-toggle-left dropdown-item-icon"></i>Publish</a>
                                                            <a class="dropdown-item" href="#"><i
                                                                    class="fe fe-toggle-right dropdown-item-icon"></i>Unpublish</a>
                                                            <a class="dropdown-item" href="#"><i
                                                                    class="fe fe-trash dropdown-item-icon"></i>Delete</a>
                                                        </span>
                                                    </span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="form-check">
                                                        <input type="checkbox" class="form-check-input" id="postThree" />
                                                        <label class="form-check-label" for="postThree"></label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <h5 class="mb-0">
                                                        <a href="#" class="text-inherit">
                                                            The Modern JavaScript Courses
                                                        </a>
                                                    </h5>
                                                </td>
                                                <td>
                                                    <i class="fe fe-link fs-4 text-primary"></i>
                                                </td>
                                                <td>
                                                    <a href="#" class="text-inherit">Workshop</a>
                                                </td>
                                                <td>5 July, 2021 5:42pm</td>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <img src="../../assets/images/avatar/avatar-4.jpg" alt=""
                                                            class="rounded-circle avatar-xs me-2" />
                                                        <h5 class="mb-0">Lisa Menon</h5>
                                                    </div>
                                                </td>
                                                <td>
                                                    <span
                                                        class="badge-dot bg-success me-1 d-inline-block align-middle"></span>Published
                                                </td>
                                                <td>
                                                    <span class="dropdown dropstart">
                                                        <a class="btn-icon btn btn-ghost btn-sm rounded-circle"
                                                            href="#" role="button" id="courseDropdown3"
                                                            data-bs-toggle="dropdown" data-bs-offset="-20,20"
                                                            aria-expanded="false">
                                                            <i class="fe fe-more-vertical"></i>
                                                        </a>
                                                        <span class="dropdown-menu" aria-labelledby="courseDropdown3">
                                                            <span class="dropdown-header">Settings</span>
                                                            <a class="dropdown-item" href="#"><i
                                                                    class="fe fe-edit dropdown-item-icon"></i>Edit</a>
                                                            <a class="dropdown-item" href="#"><i
                                                                    class="fe fe-move dropdown-item-icon"></i>Move</a>
                                                            <a class="dropdown-item" href="#"><i
                                                                    class="fe fe-copy dropdown-item-icon"></i>Copy</a>
                                                            <a class="dropdown-item" href="#"><i
                                                                    class="fe fe-toggle-left dropdown-item-icon"></i>Publish</a>
                                                            <a class="dropdown-item" href="#"><i
                                                                    class="fe fe-toggle-right dropdown-item-icon"></i>Unpublish</a>
                                                            <a class="dropdown-item" href="#"><i
                                                                    class="fe fe-trash dropdown-item-icon"></i>Delete</a>
                                                        </span>
                                                    </span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="form-check">
                                                        <input type="checkbox" class="form-check-input" id="postFour" />
                                                        <label class="form-check-label" for="postFour"></label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <h5 class="mb-0">
                                                        <a href="#" class="text-inherit">Online WordPress
                                                            Courses Become ..
                                                        </a>
                                                    </h5>
                                                </td>
                                                <td>
                                                    <i class="fe fe-image text-primary fs-4"></i>
                                                </td>
                                                <td>
                                                    <a href="#" class="text-inherit">Company</a>
                                                </td>
                                                <td>3 July, 2021 10:42am</td>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <img src="../../assets/images/avatar/avatar-8.jpg" alt=""
                                                            class="rounded-circle avatar-xs me-2" />
                                                        <h5 class="mb-0">Maria Pinto</h5>
                                                    </div>
                                                </td>
                                                <td>
                                                    <span
                                                        class="badge-dot bg-success me-1 d-inline-block align-middle"></span>
                                                    Published
                                                </td>
                                                <td>
                                                    <span class="dropdown dropstart">
                                                        <a class="btn-icon btn btn-ghost btn-sm rounded-circle"
                                                            href="#" role="button" id="courseDropdown4"
                                                            data-bs-toggle="dropdown" data-bs-offset="-20,20"
                                                            aria-expanded="false">
                                                            <i class="fe fe-more-vertical"></i>
                                                        </a>
                                                        <span class="dropdown-menu" aria-labelledby="courseDropdown4">
                                                            <span class="dropdown-header">Settings</span>
                                                            <a class="dropdown-item" href="#"><i
                                                                    class="fe fe-edit dropdown-item-icon"></i>Edit</a>
                                                            <a class="dropdown-item" href="#"><i
                                                                    class="fe fe-move dropdown-item-icon"></i>Move</a>
                                                            <a class="dropdown-item" href="#"><i
                                                                    class="fe fe-copy dropdown-item-icon"></i>Copy</a>
                                                            <a class="dropdown-item" href="#"><i
                                                                    class="fe fe-toggle-left dropdown-item-icon"></i>Publish</a>
                                                            <a class="dropdown-item" href="#"><i
                                                                    class="fe fe-toggle-right dropdown-item-icon"></i>Unpublish</a>
                                                            <a class="dropdown-item" href="#"><i
                                                                    class="fe fe-trash dropdown-item-icon"></i>Delete</a>
                                                        </span>
                                                    </span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="form-check">
                                                        <input type="checkbox" class="form-check-input" id="postFive" />
                                                        <label class="form-check-label" for="postFive"></label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <h5 class="mb-0">
                                                        <a href="#" class="text-inherit">How to become Java
                                                            Developer
                                                        </a>
                                                    </h5>
                                                </td>
                                                <td>
                                                    <i class="fe fe-image text-primary fs-4"></i>
                                                </td>
                                                <td>
                                                    <a href="#" class="text-inherit">Company</a>
                                                </td>
                                                <td>4 July, 2021 12:42pm</td>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <img src="../../assets/images/avatar/avatar-10.jpg" alt=""
                                                            class="rounded-circle avatar-xs me-2" />
                                                        <h5 class="mb-0">John Deo</h5>
                                                    </div>
                                                </td>
                                                <td>
                                                    <span
                                                        class="badge-dot bg-success me-1 d-inline-block align-middle"></span>Published
                                                </td>
                                                <td>
                                                    <span class="dropdown dropstart">
                                                        <a class="btn-icon btn btn-ghost btn-sm rounded-circle"
                                                            href="#" role="button" id="courseDropdown5"
                                                            data-bs-toggle="dropdown" data-bs-offset="-20,20"
                                                            aria-expanded="false">
                                                            <i class="fe fe-more-vertical"></i>
                                                        </a>
                                                        <span class="dropdown-menu" aria-labelledby="courseDropdown5">
                                                            <span class="dropdown-header">Settings</span>
                                                            <a class="dropdown-item" href="#"><i
                                                                    class="fe fe-edit dropdown-item-icon"></i>Edit</a>
                                                            <a class="dropdown-item" href="#"><i
                                                                    class="fe fe-move dropdown-item-icon"></i>Move</a>
                                                            <a class="dropdown-item" href="#"><i
                                                                    class="fe fe-copy dropdown-item-icon"></i>Copy</a>
                                                            <a class="dropdown-item" href="#"><i
                                                                    class="fe fe-toggle-left dropdown-item-icon"></i>Publish</a>
                                                            <a class="dropdown-item" href="#"><i
                                                                    class="fe fe-toggle-right dropdown-item-icon"></i>Unpublish</a>
                                                            <a class="dropdown-item" href="#"><i
                                                                    class="fe fe-trash dropdown-item-icon"></i>Delete</a>
                                                        </span>
                                                    </span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="form-check">
                                                        <input type="checkbox" class="form-check-input" id="postSix" />
                                                        <label class="form-check-label" for="postSix"></label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <h5 class="mb-0">
                                                        <a href="#" class="text-inherit">The Javascript Learning
                                                        </a>
                                                    </h5>
                                                </td>
                                                <td>
                                                    <i class="fe fe-video fs-4 text-primary"></i>
                                                </td>
                                                <td>
                                                    <a href="#" class="text-inherit">Marketing</a>
                                                </td>
                                                <td>3 July, 2021 12:42pm</td>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <img src="../../assets/images/avatar/avatar-15.jpg" alt=""
                                                            class="rounded-circle avatar-xs me-2" />
                                                        <h5 class="mb-0">Misty Smaln</h5>
                                                    </div>
                                                </td>
                                                <td>
                                                    <span
                                                        class="badge-dot bg-info me-1 d-inline-block align-middle"></span>Scheduled
                                                </td>
                                                <td>
                                                    <span class="dropdown dropstart">
                                                        <a class="btn-icon btn btn-ghost btn-sm rounded-circle"
                                                            href="#" role="button" id="courseDropdown6"
                                                            data-bs-toggle="dropdown" data-bs-offset="-20,20"
                                                            aria-expanded="false">
                                                            <i class="fe fe-more-vertical"></i>
                                                        </a>
                                                        <span class="dropdown-menu" aria-labelledby="courseDropdown6">
                                                            <span class="dropdown-header">Settings</span>
                                                            <a class="dropdown-item" href="#"><i
                                                                    class="fe fe-edit dropdown-item-icon"></i>Edit</a>
                                                            <a class="dropdown-item" href="#"><i
                                                                    class="fe fe-move dropdown-item-icon"></i>Move</a>
                                                            <a class="dropdown-item" href="#"><i
                                                                    class="fe fe-copy dropdown-item-icon"></i>Copy</a>
                                                            <a class="dropdown-item" href="#"><i
                                                                    class="fe fe-toggle-left dropdown-item-icon"></i>Publish</a>
                                                            <a class="dropdown-item" href="#"><i
                                                                    class="fe fe-toggle-right dropdown-item-icon"></i>Unpublish</a>
                                                            <a class="dropdown-item" href="#"><i
                                                                    class="fe fe-trash dropdown-item-icon"></i>Delete</a>
                                                        </span>
                                                    </span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="form-check">
                                                        <input type="checkbox" class="form-check-input" id="postSeven" />
                                                        <label class="form-check-label" for="postSeven"></label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <h5 class="mb-0">
                                                        <a href="#" class="text-inherit">How to become modern
                                                            Stack Developer
                                                        </a>
                                                    </h5>
                                                </td>
                                                <td>
                                                    <i class="fe fe-image fs-4 text-primary"></i>
                                                </td>
                                                <td>
                                                    <a href="#" class="text-inherit">Company</a>
                                                </td>
                                                <td>3 July, 2021 12:42pm</td>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <img src="../../assets/images/avatar/avatar-12.jpg" alt=""
                                                            class="rounded-circle avatar-xs me-2" />
                                                        <h5 class="mb-0">March Liso</h5>
                                                    </div>
                                                </td>
                                                <td>
                                                    <span
                                                        class="badge-dot bg-success me-1 d-inline-block align-middle"></span>Published
                                                </td>
                                                <td>
                                                    <span class="dropdown dropstart">
                                                        <a class="btn-icon btn btn-ghost btn-sm rounded-circle"
                                                            href="#" role="button" id="courseDropdown7"
                                                            data-bs-toggle="dropdown" data-bs-offset="-20,20"
                                                            aria-expanded="false">
                                                            <i class="fe fe-more-vertical"></i>
                                                        </a>
                                                        <span class="dropdown-menu" aria-labelledby="courseDropdown7">
                                                            <span class="dropdown-header">Settings</span>
                                                            <a class="dropdown-item" href="#"><i
                                                                    class="fe fe-edit dropdown-item-icon"></i>Edit</a>
                                                            <a class="dropdown-item" href="#"><i
                                                                    class="fe fe-move dropdown-item-icon"></i>Move</a>
                                                            <a class="dropdown-item" href="#"><i
                                                                    class="fe fe-copy dropdown-item-icon"></i>Copy</a>
                                                            <a class="dropdown-item" href="#"><i
                                                                    class="fe fe-toggle-left dropdown-item-icon"></i>Publish</a>
                                                            <a class="dropdown-item" href="#"><i
                                                                    class="fe fe-toggle-right dropdown-item-icon"></i>Unpublish</a>
                                                            <a class="dropdown-item" href="#"><i
                                                                    class="fe fe-trash dropdown-item-icon"></i>Delete</a>
                                                        </span>
                                                    </span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="form-check">
                                                        <input type="checkbox" class="form-check-input" id="postEight" />
                                                        <label class="form-check-label" for="postEight"></label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <h5 class="mb-0">
                                                        <a href="#" class="text-inherit">How to become Full
                                                            Stack Developer
                                                        </a>
                                                    </h5>
                                                </td>
                                                <td>
                                                    <i class="fe fe-link fs-4 text-primary"></i>
                                                </td>
                                                <td>
                                                    <a href="#" class="text-inherit">Workshop</a>
                                                </td>
                                                <td>2 July, 2021 12:42pm</td>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <img src="../../assets/images/avatar/avatar-2.jpg" alt=""
                                                            class="rounded-circle avatar-xs me-2" />
                                                        <h5 class="mb-0">Sina Ray</h5>
                                                    </div>
                                                </td>
                                                <td>
                                                    <span
                                                        class="badge-dot bg-danger me-1 d-inline-block align-middle"></span>Deleted
                                                </td>
                                                <td>
                                                    <span class="dropdown dropstart">
                                                        <a class="btn-icon btn btn-ghost btn-sm rounded-circle"
                                                            href="#" role="button" id="courseDropdown8"
                                                            data-bs-toggle="dropdown" data-bs-offset="-20,20"
                                                            aria-expanded="false">
                                                            <i class="fe fe-more-vertical"></i>
                                                        </a>
                                                        <span class="dropdown-menu" aria-labelledby="courseDropdown8">
                                                            <span class="dropdown-header">Settings</span>
                                                            <a class="dropdown-item" href="#"><i
                                                                    class="fe fe-edit dropdown-item-icon"></i>Edit</a>
                                                            <a class="dropdown-item" href="#"><i
                                                                    class="fe fe-move dropdown-item-icon"></i>Move</a>
                                                            <a class="dropdown-item" href="#"><i
                                                                    class="fe fe-copy dropdown-item-icon"></i>Copy</a>
                                                            <a class="dropdown-item" href="#"><i
                                                                    class="fe fe-toggle-left dropdown-item-icon"></i>Publish</a>
                                                            <a class="dropdown-item" href="#"><i
                                                                    class="fe fe-toggle-right dropdown-item-icon"></i>Unpublish</a>
                                                            <a class="dropdown-item" href="#"><i
                                                                    class="fe fe-trash dropdown-item-icon"></i>Delete</a>
                                                        </span>
                                                    </span>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="published" role="tabpanel" aria-labelledby="published-tab">
                                <div class="table-responsive">
                                    <table class="table mb-0 text-nowrap table-centered table-hover table-with-checkbox">
                                        <thead class="table-light">
                                            <tr>
                                                <th scope="col">
                                                    <div class="form-check">
                                                        <input type="checkbox" class="form-check-input"
                                                            id="checkPublished" />
                                                        <label class="form-check-label" for="checkPublished"></label>
                                                    </div>
                                                </th>
                                                <th scope="col">POST</th>
                                                <th scope="col">TYPE</th>
                                                <th scope="col">CATEGORY</th>
                                                <th scope="col">DATE</th>
                                                <th scope="col">Author</th>
                                                <th scope="col">STATUS</th>
                                                <th scope="col"></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <div class="form-check">
                                                        <input type="checkbox" class="form-check-input" id="postNine" />
                                                        <label class="form-check-label" for="postNine"></label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <h5 class="mb-0">
                                                        <a href="#" class="text-inherit">
                                                            The Modern JavaScript Courses
                                                        </a>
                                                    </h5>
                                                </td>
                                                <td>
                                                    <i class="fe fe-link fs-4 text-primary"></i>
                                                </td>
                                                <td>
                                                    <a href="#" class="text-inherit">Workshop</a>
                                                </td>
                                                <td>5 July, 2021 5:42pm</td>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <img src="../../assets/images/avatar/avatar-4.jpg" alt=""
                                                            class="rounded-circle avatar-xs me-2" />
                                                        <h5 class="mb-0">Lisa Menon</h5>
                                                    </div>
                                                </td>
                                                <td>
                                                    <span
                                                        class="badge-dot bg-success me-1 d-inline-block align-middle"></span>Published
                                                </td>
                                                <td>
                                                    <span class="dropdown dropstart">
                                                        <a class="btn-icon btn btn-ghost btn-sm rounded-circle"
                                                            href="#" role="button" id="courseDropdown9"
                                                            data-bs-toggle="dropdown" data-bs-offset="-20,20"
                                                            aria-expanded="false">
                                                            <i class="fe fe-more-vertical"></i>
                                                        </a>
                                                        <span class="dropdown-menu" aria-labelledby="courseDropdown9">
                                                            <span class="dropdown-header">Settings</span>
                                                            <a class="dropdown-item" href="#"><i
                                                                    class="fe fe-edit dropdown-item-icon"></i>Edit</a>
                                                            <a class="dropdown-item" href="#"><i
                                                                    class="fe fe-move dropdown-item-icon"></i>Move</a>
                                                            <a class="dropdown-item" href="#"><i
                                                                    class="fe fe-copy dropdown-item-icon"></i>Copy</a>
                                                            <a class="dropdown-item" href="#"><i
                                                                    class="fe fe-toggle-left dropdown-item-icon"></i>Publish</a>
                                                            <a class="dropdown-item" href="#"><i
                                                                    class="fe fe-toggle-right dropdown-item-icon"></i>Unpublish</a>
                                                            <a class="dropdown-item" href="#"><i
                                                                    class="fe fe-trash dropdown-item-icon"></i>Delete</a>
                                                        </span>
                                                    </span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="form-check">
                                                        <input type="checkbox" class="form-check-input" id="postTen" />
                                                        <label class="form-check-label" for="postTen"></label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <h5 class="mb-0">
                                                        <a href="#" class="text-inherit">Online WordPress
                                                            Courses Become ..
                                                        </a>
                                                    </h5>
                                                </td>
                                                <td>
                                                    <i class="fe fe-image text-primary fs-4"></i>
                                                </td>
                                                <td>
                                                    <a href="#" class="text-inherit">Company</a>
                                                </td>
                                                <td>3 July, 2021 10:42am</td>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <img src="../../assets/images/avatar/avatar-8.jpg" alt=""
                                                            class="rounded-circle avatar-xs me-2" />
                                                        <h5 class="mb-0">Maria Pinto</h5>
                                                    </div>
                                                </td>
                                                <td>
                                                    <span
                                                        class="badge-dot bg-success me-1 d-inline-block align-middle"></span>
                                                    Published
                                                </td>
                                                <td>
                                                    <span class="dropdown dropstart">
                                                        <a class="btn-icon btn btn-ghost btn-sm rounded-circle"
                                                            href="#" role="button" id="courseDropdown10"
                                                            data-bs-toggle="dropdown" data-bs-offset="-20,20"
                                                            aria-expanded="false">
                                                            <i class="fe fe-more-vertical"></i>
                                                        </a>
                                                        <span class="dropdown-menu" aria-labelledby="courseDropdown10">
                                                            <span class="dropdown-header">Settings</span>
                                                            <a class="dropdown-item" href="#"><i
                                                                    class="fe fe-edit dropdown-item-icon"></i>Edit</a>
                                                            <a class="dropdown-item" href="#"><i
                                                                    class="fe fe-move dropdown-item-icon"></i>Move</a>
                                                            <a class="dropdown-item" href="#"><i
                                                                    class="fe fe-copy dropdown-item-icon"></i>Copy</a>
                                                            <a class="dropdown-item" href="#"><i
                                                                    class="fe fe-toggle-left dropdown-item-icon"></i>Publish</a>
                                                            <a class="dropdown-item" href="#"><i
                                                                    class="fe fe-toggle-right dropdown-item-icon"></i>Unpublish</a>
                                                            <a class="dropdown-item" href="#"><i
                                                                    class="fe fe-trash dropdown-item-icon"></i>Delete</a>
                                                        </span>
                                                    </span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="form-check">
                                                        <input type="checkbox" class="form-check-input"
                                                            id="postEleven" />
                                                        <label class="form-check-label" for="postEleven"></label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <h5 class="mb-0">
                                                        <a href="#" class="text-inherit">How to become Java
                                                            Developer
                                                        </a>
                                                    </h5>
                                                </td>
                                                <td>
                                                    <i class="fe fe-image text-primary fs-4"></i>
                                                </td>
                                                <td>
                                                    <a href="#" class="text-inherit">Company</a>
                                                </td>
                                                <td>4 July, 2021 12:42pm</td>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <img src="../../assets/images/avatar/avatar-10.jpg" alt=""
                                                            class="rounded-circle avatar-xs me-2" />
                                                        <h5 class="mb-0">John Deo</h5>
                                                    </div>
                                                </td>
                                                <td>
                                                    <span
                                                        class="badge-dot bg-success me-1 d-inline-block align-middle"></span>Published
                                                </td>
                                                <td>
                                                    <span class="dropdown dropstart">
                                                        <a class="btn-icon btn btn-ghost btn-sm rounded-circle"
                                                            href="#" role="button" id="courseDropdown11"
                                                            data-bs-toggle="dropdown" data-bs-offset="-20,20"
                                                            aria-expanded="false">
                                                            <i class="fe fe-more-vertical"></i>
                                                        </a>
                                                        <span class="dropdown-menu" aria-labelledby="courseDropdown11">
                                                            <span class="dropdown-header">Settings</span>
                                                            <a class="dropdown-item" href="#"><i
                                                                    class="fe fe-edit dropdown-item-icon"></i>Edit</a>
                                                            <a class="dropdown-item" href="#"><i
                                                                    class="fe fe-move dropdown-item-icon"></i>Move</a>
                                                            <a class="dropdown-item" href="#"><i
                                                                    class="fe fe-copy dropdown-item-icon"></i>Copy</a>
                                                            <a class="dropdown-item" href="#"><i
                                                                    class="fe fe-toggle-left dropdown-item-icon"></i>Publish</a>
                                                            <a class="dropdown-item" href="#"><i
                                                                    class="fe fe-toggle-right dropdown-item-icon"></i>Unpublish</a>
                                                            <a class="dropdown-item" href="#"><i
                                                                    class="fe fe-trash dropdown-item-icon"></i>Delete</a>
                                                        </span>
                                                    </span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="form-check">
                                                        <input type="checkbox" class="form-check-input"
                                                            id="postTwelve" />
                                                        <label class="form-check-label" for="postTwelve"></label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <h5 class="mb-0">
                                                        <a href="#" class="text-inherit">How to become modern
                                                            Stack Developer
                                                        </a>
                                                    </h5>
                                                </td>
                                                <td>
                                                    <i class="fe fe-image fs-4 text-primary"></i>
                                                </td>
                                                <td>
                                                    <a href="#" class="text-inherit">Company</a>
                                                </td>
                                                <td>3 July, 2021 12:42pm</td>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <img src="../../assets/images/avatar/avatar-12.jpg" alt=""
                                                            class="rounded-circle avatar-xs me-2" />
                                                        <h5 class="mb-0">March Liso</h5>
                                                    </div>
                                                </td>
                                                <td>
                                                    <span
                                                        class="badge-dot bg-success me-1 d-inline-block align-middle"></span>Published
                                                </td>
                                                <td>
                                                    <span class="dropdown dropstart">
                                                        <a class="btn-icon btn btn-ghost btn-sm rounded-circle"
                                                            href="#" role="button" id="courseDropdown12"
                                                            data-bs-toggle="dropdown" data-bs-offset="-20,20"
                                                            aria-expanded="false">
                                                            <i class="fe fe-more-vertical"></i>
                                                        </a>
                                                        <span class="dropdown-menu" aria-labelledby="courseDropdown12">
                                                            <span class="dropdown-header">Settings</span>
                                                            <a class="dropdown-item" href="#"><i
                                                                    class="fe fe-edit dropdown-item-icon"></i>Edit</a>
                                                            <a class="dropdown-item" href="#"><i
                                                                    class="fe fe-move dropdown-item-icon"></i>Move</a>
                                                            <a class="dropdown-item" href="#"><i
                                                                    class="fe fe-copy dropdown-item-icon"></i>Copy</a>
                                                            <a class="dropdown-item" href="#"><i
                                                                    class="fe fe-toggle-left dropdown-item-icon"></i>Publish</a>
                                                            <a class="dropdown-item" href="#"><i
                                                                    class="fe fe-toggle-right dropdown-item-icon"></i>Unpublish</a>
                                                            <a class="dropdown-item" href="#"><i
                                                                    class="fe fe-trash dropdown-item-icon"></i>Delete</a>
                                                        </span>
                                                    </span>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="scheduled" role="tabpanel" aria-labelledby="scheduled-tab">
                                <div class="table-responsive">
                                    <table class="table mb-0 text-nowrap table-centered table-hover table-with-checkbox">
                                        <thead class="table-light">
                                            <tr>
                                                <th scope="col">
                                                    <div class="form-check">
                                                        <input type="checkbox" class="form-check-input"
                                                            id="checkScheduled" />
                                                        <label class="form-check-label" for="checkScheduled"></label>
                                                    </div>
                                                </th>
                                                <th scope="col">POST</th>
                                                <th scope="col">TYPE</th>
                                                <th scope="col">CATEGORY</th>
                                                <th scope="col">DATE</th>
                                                <th scope="col">Author</th>
                                                <th scope="col">STATUS</th>
                                                <th scope="col"></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <div class="form-check">
                                                        <input type="checkbox" class="form-check-input"
                                                            id="postThirteen" />
                                                        <label class="form-check-label" for="postThirteen"></label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <h5 class="mb-0">
                                                        <a href="#" class="text-inherit">The Javascript Learning
                                                        </a>
                                                    </h5>
                                                </td>
                                                <td>
                                                    <i class="fe fe-video fs-4 text-primary"></i>
                                                </td>
                                                <td>
                                                    <a href="#" class="text-inherit">Marketing</a>
                                                </td>
                                                <td>3 July, 2021 12:42pm</td>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <img src="../../assets/images/avatar/avatar-15.jpg" alt=""
                                                            class="rounded-circle avatar-xs me-2" />
                                                        <h5 class="mb-0">Misty Smaln</h5>
                                                    </div>
                                                </td>
                                                <td>
                                                    <span
                                                        class="badge-dot bg-info me-1 d-inline-block align-middle"></span>Scheduled
                                                </td>
                                                <td>
                                                    <span class="dropdown dropstart">
                                                        <a class="btn-icon btn btn-ghost btn-sm rounded-circle"
                                                            href="#" role="button" id="courseDropdown13"
                                                            data-bs-toggle="dropdown" data-bs-offset="-20,20"
                                                            aria-expanded="false">
                                                            <i class="fe fe-more-vertical"></i>
                                                        </a>
                                                        <span class="dropdown-menu" aria-labelledby="courseDropdown13">
                                                            <span class="dropdown-header">Settings</span>
                                                            <a class="dropdown-item" href="#"><i
                                                                    class="fe fe-edit dropdown-item-icon"></i>Edit</a>
                                                            <a class="dropdown-item" href="#"><i
                                                                    class="fe fe-move dropdown-item-icon"></i>Move</a>
                                                            <a class="dropdown-item" href="#"><i
                                                                    class="fe fe-copy dropdown-item-icon"></i>Copy</a>
                                                            <a class="dropdown-item" href="#"><i
                                                                    class="fe fe-toggle-left dropdown-item-icon"></i>Publish</a>
                                                            <a class="dropdown-item" href="#"><i
                                                                    class="fe fe-toggle-right dropdown-item-icon"></i>Unpublish</a>
                                                            <a class="dropdown-item" href="#"><i
                                                                    class="fe fe-trash dropdown-item-icon"></i>Delete</a>
                                                        </span>
                                                    </span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="form-check">
                                                        <input type="checkbox" class="form-check-input"
                                                            id="postFourteen" />
                                                        <label class="form-check-label" for="postFourteen"></label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <h5 class="mb-0">
                                                        <a href="#" class="text-inherit">Revolutionize how you
                                                            build the web...
                                                        </a>
                                                    </h5>
                                                </td>
                                                <td>
                                                    <i class="fe fe-image fs-4 text-primary"></i>
                                                </td>
                                                <td>
                                                    <a href="#" class="text-inherit">Company</a>
                                                </td>
                                                <td>3 July, 2021 12:42pm</td>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <img src="../../assets/images/avatar/avatar-13.jpg" alt=""
                                                            class="rounded-circle avatar-xs me-2" />
                                                        <h5 class="mb-0">Nikala Socha</h5>
                                                    </div>
                                                </td>
                                                <td>
                                                    <span
                                                        class="badge-dot bg-info me-1 d-inline-block align-middle"></span>Scheduled
                                                </td>
                                                <td>
                                                    <span class="dropdown dropstart">
                                                        <a class="btn-icon btn btn-ghost btn-sm rounded-circle"
                                                            href="#" role="button" id="courseDropdown14"
                                                            data-bs-toggle="dropdown" data-bs-offset="-20,20"
                                                            aria-expanded="false">
                                                            <i class="fe fe-more-vertical"></i>
                                                        </a>
                                                        <span class="dropdown-menu" aria-labelledby="courseDropdown14">
                                                            <span class="dropdown-header">Settings</span>
                                                            <a class="dropdown-item" href="#"><i
                                                                    class="fe fe-edit dropdown-item-icon"></i>Edit</a>
                                                            <a class="dropdown-item" href="#"><i
                                                                    class="fe fe-move dropdown-item-icon"></i>Move</a>
                                                            <a class="dropdown-item" href="#"><i
                                                                    class="fe fe-copy dropdown-item-icon"></i>Copy</a>
                                                            <a class="dropdown-item" href="#"><i
                                                                    class="fe fe-toggle-left dropdown-item-icon"></i>Publish</a>
                                                            <a class="dropdown-item" href="#"><i
                                                                    class="fe fe-toggle-right dropdown-item-icon"></i>Unpublish</a>
                                                            <a class="dropdown-item" href="#"><i
                                                                    class="fe fe-trash dropdown-item-icon"></i>Delete</a>
                                                        </span>
                                                    </span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="form-check">
                                                        <input type="checkbox" class="form-check-input"
                                                            id="postFifteen" />
                                                        <label class="form-check-label" for="postFifteen"></label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <h5 class="mb-0">
                                                        <a href="#" class="text-inherit">The modern Javascript
                                                            Course
                                                        </a>
                                                    </h5>
                                                </td>
                                                <td>
                                                    <i class="fe fe-link fs-4 text-primary"></i>
                                                </td>
                                                <td>
                                                    <a href="#" class="text-inherit">Workshop</a>
                                                </td>
                                                <td>3 July, 2021 12:42pm</td>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <img src="../../assets/images/avatar/avatar-9.jpg" alt=""
                                                            class="rounded-circle avatar-xs me-2" />
                                                        <h5 class="mb-0">Jeny D'Souza</h5>
                                                    </div>
                                                </td>
                                                <td>
                                                    <span
                                                        class="badge-dot bg-info me-1 d-inline-block align-middle"></span>Scheduled
                                                </td>
                                                <td>
                                                    <span class="dropdown dropstart">
                                                        <a class="btn-icon btn btn-ghost btn-sm rounded-circle"
                                                            href="#" role="button" id="courseDropdown15"
                                                            data-bs-toggle="dropdown" data-bs-offset="-20,20"
                                                            aria-expanded="false">
                                                            <i class="fe fe-more-vertical"></i>
                                                        </a>
                                                        <span class="dropdown-menu" aria-labelledby="courseDropdown15">
                                                            <span class="dropdown-header">Settings</span>
                                                            <a class="dropdown-item" href="#"><i
                                                                    class="fe fe-edit dropdown-item-icon"></i>Edit</a>
                                                            <a class="dropdown-item" href="#"><i
                                                                    class="fe fe-move dropdown-item-icon"></i>Move</a>
                                                            <a class="dropdown-item" href="#"><i
                                                                    class="fe fe-copy dropdown-item-icon"></i>Copy</a>
                                                            <a class="dropdown-item" href="#"><i
                                                                    class="fe fe-toggle-left dropdown-item-icon"></i>Publish</a>
                                                            <a class="dropdown-item" href="#"><i
                                                                    class="fe fe-toggle-right dropdown-item-icon"></i>Unpublish</a>
                                                            <a class="dropdown-item" href="#"><i
                                                                    class="fe fe-trash dropdown-item-icon"></i>Delete</a>
                                                        </span>
                                                    </span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="form-check">
                                                        <input type="checkbox" class="form-check-input"
                                                            id="postSixteen" />
                                                        <label class="form-check-label" for="postSixteen"></label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <h5 class="mb-0">
                                                        <a href="#" class="text-inherit">Github learning course
                                                        </a>
                                                    </h5>
                                                </td>
                                                <td>
                                                    <i class="fe fe-image fs-4 text-primary"></i>
                                                </td>
                                                <td>
                                                    <a href="#" class="text-inherit">Course</a>
                                                </td>
                                                <td>3 July, 2021 12:42pm</td>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <img src="../../assets/images/avatar/avatar-5.jpg" alt=""
                                                            class="rounded-circle avatar-xs me-2" />
                                                        <h5 class="mb-0">Samiksha Nitry</h5>
                                                    </div>
                                                </td>
                                                <td>
                                                    <span
                                                        class="badge-dot bg-info me-1 d-inline-block align-middle"></span>Scheduled
                                                </td>
                                                <td>
                                                    <span class="dropdown dropstart">
                                                        <a class="btn-icon btn btn-ghost btn-sm rounded-circle"
                                                            href="#" role="button" id="courseDropdown16"
                                                            data-bs-toggle="dropdown" data-bs-offset="-20,20"
                                                            aria-expanded="false">
                                                            <i class="fe fe-more-vertical"></i>
                                                        </a>
                                                        <span class="dropdown-menu" aria-labelledby="courseDropdown16">
                                                            <span class="dropdown-header">Settings</span>
                                                            <a class="dropdown-item" href="#"><i
                                                                    class="fe fe-edit dropdown-item-icon"></i>Edit</a>
                                                            <a class="dropdown-item" href="#"><i
                                                                    class="fe fe-move dropdown-item-icon"></i>Move</a>
                                                            <a class="dropdown-item" href="#"><i
                                                                    class="fe fe-copy dropdown-item-icon"></i>Copy</a>
                                                            <a class="dropdown-item" href="#"><i
                                                                    class="fe fe-toggle-left dropdown-item-icon"></i>Publish</a>
                                                            <a class="dropdown-item" href="#"><i
                                                                    class="fe fe-toggle-right dropdown-item-icon"></i>Unpublish</a>
                                                            <a class="dropdown-item" href="#"><i
                                                                    class="fe fe-trash dropdown-item-icon"></i>Delete</a>
                                                        </span>
                                                    </span>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="draft" role="tabpanel" aria-labelledby="draft-tab">
                                <div class="table-responsive">
                                    <table class="table mb-0 text-nowrap table-centered table-hover table-with-checkbox">
                                        <thead class="table-light">
                                            <tr>
                                                <th scope="col">
                                                    <div class="form-check">
                                                        <input type="checkbox" class="form-check-input"
                                                            id="checkDraft" />
                                                        <label class="form-check-label" for="checkDraft"></label>
                                                    </div>
                                                </th>
                                                <th scope="col">POST</th>
                                                <th scope="col">TYPE</th>
                                                <th scope="col">CATEGORY</th>
                                                <th scope="col">DATE</th>
                                                <th scope="col">Author</th>
                                                <th scope="col">STATUS</th>
                                                <th scope="col"></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <div class="form-check">
                                                        <input type="checkbox" class="form-check-input"
                                                            id="postSeventeen" />
                                                        <label class="form-check-label" for="postSeventeen"></label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <h5 class="mb-0">
                                                        <a href="#" class="text-inherit">
                                                            Revolutionize how you build the web...
                                                        </a>
                                                    </h5>
                                                </td>
                                                <td>
                                                    <i class="fe fe-image text-primary fs-4"></i>
                                                </td>
                                                <td>
                                                    <a href="#" class="text-inherit">Courses</a>
                                                </td>
                                                <td>7 July, 2021 1:42pm</td>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <img src="../../assets/images/avatar/avatar-7.jpg" alt=""
                                                            class="rounded-circle avatar-xs me-2" />
                                                        <h5 class="mb-0">Reva Yokk</h5>
                                                    </div>
                                                </td>
                                                <td>
                                                    <span
                                                        class="badge-dot bg-warning me-1 d-inline-block align-middle"></span>Draft
                                                </td>
                                                <td>
                                                    <span class="dropdown dropstart">
                                                        <a class="btn-icon btn btn-ghost btn-sm rounded-circle"
                                                            href="#" role="button" id="courseDropdown17"
                                                            data-bs-toggle="dropdown" data-bs-offset="-20,20"
                                                            aria-expanded="false">
                                                            <i class="fe fe-more-vertical"></i>
                                                        </a>
                                                        <span class="dropdown-menu" aria-labelledby="courseDropdown17">
                                                            <span class="dropdown-header">Settings</span>
                                                            <a class="dropdown-item" href="#"><i
                                                                    class="fe fe-edit dropdown-item-icon"></i>Edit</a>
                                                            <a class="dropdown-item" href="#"><i
                                                                    class="fe fe-move dropdown-item-icon"></i>Move</a>
                                                            <a class="dropdown-item" href="#"><i
                                                                    class="fe fe-copy dropdown-item-icon"></i>Copy</a>
                                                            <a class="dropdown-item" href="#"><i
                                                                    class="fe fe-toggle-left dropdown-item-icon"></i>Publish</a>
                                                            <a class="dropdown-item" href="#"><i
                                                                    class="fe fe-toggle-right dropdown-item-icon"></i>Unpublish</a>
                                                            <a class="dropdown-item" href="#"><i
                                                                    class="fe fe-trash dropdown-item-icon"></i>Delete</a>
                                                        </span>
                                                    </span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="form-check">
                                                        <input type="checkbox" class="form-check-input"
                                                            id="postEighteen" />
                                                        <label class="form-check-label" for="postEighteen"></label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <h5 class="mb-0">
                                                        <a href="#" class="text-inherit">
                                                            Github learning course
                                                        </a>
                                                    </h5>
                                                </td>
                                                <td>
                                                    <i class="fe fe-video text-primary fs-4"></i>
                                                </td>
                                                <td>
                                                    <a href="#" class="text-inherit">Marketing</a>
                                                </td>
                                                <td>7 July, 2021 1:42pm</td>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <img src="../../assets/images/avatar/avatar-10.jpg" alt=""
                                                            class="rounded-circle avatar-xs me-2" />
                                                        <h5 class="mb-0">Jone Deo</h5>
                                                    </div>
                                                </td>
                                                <td>
                                                    <span
                                                        class="badge-dot bg-warning me-1 d-inline-block align-middle"></span>Draft
                                                </td>
                                                <td>
                                                    <span class="dropdown dropstart">
                                                        <a class="btn-icon btn btn-ghost btn-sm rounded-circle"
                                                            href="#" role="button" id="courseDropdown18"
                                                            data-bs-toggle="dropdown" data-bs-offset="-20,20"
                                                            aria-expanded="false">
                                                            <i class="fe fe-more-vertical"></i>
                                                        </a>
                                                        <span class="dropdown-menu" aria-labelledby="courseDropdown18">
                                                            <span class="dropdown-header">Settings</span>
                                                            <a class="dropdown-item" href="#"><i
                                                                    class="fe fe-edit dropdown-item-icon"></i>Edit</a>
                                                            <a class="dropdown-item" href="#"><i
                                                                    class="fe fe-move dropdown-item-icon"></i>Move</a>
                                                            <a class="dropdown-item" href="#"><i
                                                                    class="fe fe-copy dropdown-item-icon"></i>Copy</a>
                                                            <a class="dropdown-item" href="#"><i
                                                                    class="fe fe-toggle-left dropdown-item-icon"></i>Publish</a>
                                                            <a class="dropdown-item" href="#"><i
                                                                    class="fe fe-toggle-right dropdown-item-icon"></i>Unpublish</a>
                                                            <a class="dropdown-item" href="#"><i
                                                                    class="fe fe-trash dropdown-item-icon"></i>Delete</a>
                                                        </span>
                                                    </span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="form-check">
                                                        <input type="checkbox" class="form-check-input"
                                                            id="postNineteen" />
                                                        <label class="form-check-label" for="postNineteen"></label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <h5 class="mb-0">
                                                        <a href="#" class="text-inherit">
                                                            how you build the website with Gatsby
                                                        </a>
                                                    </h5>
                                                </td>
                                                <td>
                                                    <i class="fe fe-image text-primary fs-4"></i>
                                                </td>
                                                <td>
                                                    <a href="#" class="text-inherit">Courses</a>
                                                </td>
                                                <td>7 July, 2021 1:42pm</td>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <img src="../../assets/images/avatar/avatar-14.jpg"
                                                            alt="" class="rounded-circle avatar-xs me-2" />
                                                        <h5 class="mb-0">Dee Lumpa</h5>
                                                    </div>
                                                </td>
                                                <td>
                                                    <span
                                                        class="badge-dot bg-warning me-1 d-inline-block align-middle"></span>Draft
                                                </td>
                                                <td>
                                                    <span class="dropdown dropstart">
                                                        <a class="btn-icon btn btn-ghost btn-sm rounded-circle"
                                                            href="#" role="button" id="courseDropdown19"
                                                            data-bs-toggle="dropdown" data-bs-offset="-20,20"
                                                            aria-expanded="false">
                                                            <i class="fe fe-more-vertical"></i>
                                                        </a>
                                                        <span class="dropdown-menu" aria-labelledby="courseDropdown19">
                                                            <span class="dropdown-header">Settings</span>
                                                            <a class="dropdown-item" href="#"><i
                                                                    class="fe fe-edit dropdown-item-icon"></i>Edit</a>
                                                            <a class="dropdown-item" href="#"><i
                                                                    class="fe fe-move dropdown-item-icon"></i>Move</a>
                                                            <a class="dropdown-item" href="#"><i
                                                                    class="fe fe-copy dropdown-item-icon"></i>Copy</a>
                                                            <a class="dropdown-item" href="#"><i
                                                                    class="fe fe-toggle-left dropdown-item-icon"></i>Publish</a>
                                                            <a class="dropdown-item" href="#"><i
                                                                    class="fe fe-toggle-right dropdown-item-icon"></i>Unpublish</a>
                                                            <a class="dropdown-item" href="#"><i
                                                                    class="fe fe-trash dropdown-item-icon"></i>Delete</a>
                                                        </span>
                                                    </span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="form-check">
                                                        <input type="checkbox" class="form-check-input"
                                                            id="postTwenty" />
                                                        <label class="form-check-label" for="postTwenty"></label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <h5 class="mb-0">
                                                        <a href="#" class="text-inherit">
                                                            Become Full Stake Developer
                                                        </a>
                                                    </h5>
                                                </td>
                                                <td>
                                                    <i class="fe fe-image text-primary fs-4"></i>
                                                </td>
                                                <td>
                                                    <a href="#" class="text-inherit">Courses</a>
                                                </td>
                                                <td>7 July, 2021 1:42pm</td>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <img src="../../assets/images/avatar/avatar-8.jpg"
                                                            alt="" class="rounded-circle avatar-xs me-2" />
                                                        <h5 class="mb-0">Samara Lily</h5>
                                                    </div>
                                                </td>
                                                <td>
                                                    <span
                                                        class="badge-dot bg-warning me-1 d-inline-block align-middle"></span>Draft
                                                </td>
                                                <td>
                                                    <span class="dropdown dropstart">
                                                        <a class="btn-icon btn btn-ghost btn-sm rounded-circle"
                                                            href="#" role="button" id="courseDropdown20"
                                                            data-bs-toggle="dropdown" data-bs-offset="-20,20"
                                                            aria-expanded="false">
                                                            <i class="fe fe-more-vertical"></i>
                                                        </a>
                                                        <span class="dropdown-menu" aria-labelledby="courseDropdown20">
                                                            <span class="dropdown-header">Settings</span>
                                                            <a class="dropdown-item" href="#"><i
                                                                    class="fe fe-edit dropdown-item-icon"></i>Edit</a>
                                                            <a class="dropdown-item" href="#"><i
                                                                    class="fe fe-move dropdown-item-icon"></i>Move</a>
                                                            <a class="dropdown-item" href="#"><i
                                                                    class="fe fe-copy dropdown-item-icon"></i>Copy</a>
                                                            <a class="dropdown-item" href="#"><i
                                                                    class="fe fe-toggle-left dropdown-item-icon"></i>Publish</a>
                                                            <a class="dropdown-item" href="#"><i
                                                                    class="fe fe-toggle-right dropdown-item-icon"></i>Unpublish</a>
                                                            <a class="dropdown-item" href="#"><i
                                                                    class="fe fe-trash dropdown-item-icon"></i>Delete</a>
                                                        </span>
                                                    </span>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="deleted" role="tabpanel" aria-labelledby="deleted-tab">
                                <div class="table-responsive">
                                    <table class="table mb-0 text-nowrap table-centered table-hover table-with-checkbox">
                                        <thead class="table-light">
                                            <tr>
                                                <th scope="col">
                                                    <div class="form-check">
                                                        <input type="checkbox" class="form-check-input"
                                                            id="checkDeleted" />
                                                        <label class="form-check-label" for="checkDeleted"></label>
                                                    </div>
                                                </th>
                                                <th scope="col">POST</th>
                                                <th scope="col">TYPE</th>
                                                <th scope="col">CATEGORY</th>
                                                <th scope="col">DATE</th>
                                                <th scope="col">Author</th>
                                                <th scope="col">STATUS</th>
                                                <th scope="col"></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <div class="form-check">
                                                        <input type="checkbox" class="form-check-input"
                                                            id="postTwentyOne" />
                                                        <label class="form-check-label" for="postTwentyOne"></label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <h5 class="mb-0">
                                                        <a href="#" class="text-inherit">How to become Full
                                                            Stack Developer
                                                        </a>
                                                    </h5>
                                                </td>
                                                <td>
                                                    <i class="fe fe-link fs-4 text-primary"></i>
                                                </td>
                                                <td>
                                                    <a href="#" class="text-inherit">Workshop</a>
                                                </td>
                                                <td>2 July, 2021 12:42pm</td>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <img src="../../assets/images/avatar/avatar-2.jpg"
                                                            alt="" class="rounded-circle avatar-xs me-2" />
                                                        <h5 class="mb-0">Sina Ray</h5>
                                                    </div>
                                                </td>
                                                <td>
                                                    <span
                                                        class="badge-dot bg-danger me-1 d-inline-block align-middle"></span>Deleted
                                                </td>
                                                <td>
                                                    <span class="dropdown dropstart">
                                                        <a class="btn-icon btn btn-ghost btn-sm rounded-circle"
                                                            href="#" role="button" id="courseDropdown21"
                                                            data-bs-toggle="dropdown" data-bs-offset="-20,20"
                                                            aria-expanded="false">
                                                            <i class="fe fe-more-vertical"></i>
                                                        </a>
                                                        <span class="dropdown-menu" aria-labelledby="courseDropdown21">
                                                            <span class="dropdown-header">Settings</span>
                                                            <a class="dropdown-item" href="#"><i
                                                                    class="fe fe-edit dropdown-item-icon"></i>Edit</a>
                                                            <a class="dropdown-item" href="#"><i
                                                                    class="fe fe-move dropdown-item-icon"></i>Move</a>
                                                            <a class="dropdown-item" href="#"><i
                                                                    class="fe fe-copy dropdown-item-icon"></i>Copy</a>
                                                            <a class="dropdown-item" href="#"><i
                                                                    class="fe fe-toggle-left dropdown-item-icon"></i>Publish</a>
                                                            <a class="dropdown-item" href="#"><i
                                                                    class="fe fe-toggle-right dropdown-item-icon"></i>Unpublish</a>
                                                            <a class="dropdown-item" href="#"><i
                                                                    class="fe fe-trash dropdown-item-icon"></i>Delete</a>
                                                        </span>
                                                    </span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="form-check">
                                                        <input type="checkbox" class="form-check-input"
                                                            id="postTwentyTwo" />
                                                        <label class="form-check-label" for="postTwentyTwo"></label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <h5 class="mb-0">
                                                        <a href="#" class="text-inherit">How to build website
                                                            with React
                                                        </a>
                                                    </h5>
                                                </td>
                                                <td>
                                                    <i class="fe fe-image fs-4 text-primary"></i>
                                                </td>
                                                <td>
                                                    <a href="#" class="text-inherit">Course</a>
                                                </td>
                                                <td>2 July, 2021 12:42pm</td>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <img src="../../assets/images/avatar/avatar-5.jpg"
                                                            alt="" class="rounded-circle avatar-xs me-2" />
                                                        <h5 class="mb-0">Ellonek Lincha</h5>
                                                    </div>
                                                </td>
                                                <td>
                                                    <span
                                                        class="badge-dot bg-danger me-1 d-inline-block align-middle"></span>Deleted
                                                </td>
                                                <td>
                                                    <span class="dropdown dropstart">
                                                        <a class="btn-icon btn btn-ghost btn-sm rounded-circle"
                                                            href="#" role="button" id="courseDropdown23"
                                                            data-bs-toggle="dropdown" data-bs-offset="-20,20"
                                                            aria-expanded="false">
                                                            <i class="fe fe-more-vertical"></i>
                                                        </a>
                                                        <span class="dropdown-menu" aria-labelledby="courseDropdown23">
                                                            <span class="dropdown-header">Settings</span>
                                                            <a class="dropdown-item" href="#"><i
                                                                    class="fe fe-edit dropdown-item-icon"></i>Edit</a>
                                                            <a class="dropdown-item" href="#"><i
                                                                    class="fe fe-move dropdown-item-icon"></i>Move</a>
                                                            <a class="dropdown-item" href="#"><i
                                                                    class="fe fe-copy dropdown-item-icon"></i>Copy</a>
                                                            <a class="dropdown-item" href="#"><i
                                                                    class="fe fe-toggle-left dropdown-item-icon"></i>Publish</a>
                                                            <a class="dropdown-item" href="#"><i
                                                                    class="fe fe-toggle-right dropdown-item-icon"></i>Unpublish</a>
                                                            <a class="dropdown-item" href="#"><i
                                                                    class="fe fe-trash dropdown-item-icon"></i>Delete</a>
                                                        </span>
                                                    </span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="form-check">
                                                        <input type="checkbox" class="form-check-input"
                                                            id="postTwentyThree" />
                                                        <label class="form-check-label" for="postTwentyThree"></label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <h5 class="mb-0">
                                                        <a href="#" class="text-inherit">Learning a basic
                                                            bootstrap with us
                                                        </a>
                                                    </h5>
                                                </td>
                                                <td>
                                                    <i class="fe fe-image fs-4 text-primary"></i>
                                                </td>
                                                <td>
                                                    <a href="#" class="text-inherit">Course</a>
                                                </td>
                                                <td>2 July, 2021 12:42pm</td>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <img src="../../assets/images/avatar/avatar-6.jpg"
                                                            alt="" class="rounded-circle avatar-xs me-2" />
                                                        <h5 class="mb-0">Misara Chopay</h5>
                                                    </div>
                                                </td>
                                                <td>
                                                    <span
                                                        class="badge-dot bg-danger me-1 d-inline-block align-middle"></span>Deleted
                                                </td>
                                                <td>
                                                    <span class="dropdown dropstart">
                                                        <a class="btn-icon btn btn-ghost btn-sm rounded-circle"
                                                            href="#" role="button" id="courseDropdown24"
                                                            data-bs-toggle="dropdown" data-bs-offset="-20,20"
                                                            aria-expanded="false">
                                                            <i class="fe fe-more-vertical"></i>
                                                        </a>
                                                        <span class="dropdown-menu" aria-labelledby="courseDropdown24">
                                                            <span class="dropdown-header">Settings</span>
                                                            <a class="dropdown-item" href="#"><i
                                                                    class="fe fe-edit dropdown-item-icon"></i>Edit</a>
                                                            <a class="dropdown-item" href="#"><i
                                                                    class="fe fe-move dropdown-item-icon"></i>Move</a>
                                                            <a class="dropdown-item" href="#"><i
                                                                    class="fe fe-copy dropdown-item-icon"></i>Copy</a>
                                                            <a class="dropdown-item" href="#"><i
                                                                    class="fe fe-toggle-left dropdown-item-icon"></i>Publish</a>
                                                            <a class="dropdown-item" href="#"><i
                                                                    class="fe fe-toggle-right dropdown-item-icon"></i>Unpublish</a>
                                                            <a class="dropdown-item" href="#"><i
                                                                    class="fe fe-trash dropdown-item-icon"></i>Delete</a>
                                                        </span>
                                                    </span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="form-check">
                                                        <input type="checkbox" class="form-check-input"
                                                            id="postTwentyFour" />
                                                        <label class="form-check-label" for="postTwentyFour"></label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <h5 class="mb-0">
                                                        <a href="#" class="text-inherit">Guide to Static Sites
                                                            with Gatsby.js
                                                        </a>
                                                    </h5>
                                                </td>
                                                <td>
                                                    <i class="fe fe-video fs-4 text-primary"></i>
                                                </td>
                                                <td>
                                                    <a href="#" class="text-inherit">Marketing</a>
                                                </td>
                                                <td>2 July, 2021 12:42pm</td>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <img src="../../assets/images/avatar/avatar-6.jpg"
                                                            alt="" class="rounded-circle avatar-xs me-2" />
                                                        <h5 class="mb-0">Misara Chopay</h5>
                                                    </div>
                                                </td>
                                                <td>
                                                    <span
                                                        class="badge-dot bg-danger me-1 d-inline-block align-middle"></span>Deleted
                                                </td>
                                                <td>
                                                    <span class="dropdown dropstart">
                                                        <a class="btn-icon btn btn-ghost btn-sm rounded-circle"
                                                            href="#" role="button" id="courseDropdown25"
                                                            data-bs-toggle="dropdown" data-bs-offset="-20,20"
                                                            aria-expanded="false">
                                                            <i class="fe fe-more-vertical"></i>
                                                        </a>
                                                        <span class="dropdown-menu" aria-labelledby="courseDropdown25">
                                                            <span class="dropdown-header">Settings</span>
                                                            <a class="dropdown-item" href="#"><i
                                                                    class="fe fe-edit dropdown-item-icon"></i>Edit</a>
                                                            <a class="dropdown-item" href="#"><i
                                                                    class="fe fe-move dropdown-item-icon"></i>Move</a>
                                                            <a class="dropdown-item" href="#"><i
                                                                    class="fe fe-copy dropdown-item-icon"></i>Copy</a>
                                                            <a class="dropdown-item" href="#"><i
                                                                    class="fe fe-toggle-left dropdown-item-icon"></i>Publish</a>
                                                            <a class="dropdown-item" href="#"><i
                                                                    class="fe fe-toggle-right dropdown-item-icon"></i>Unpublish</a>
                                                            <a class="dropdown-item" href="#"><i
                                                                    class="fe fe-trash dropdown-item-icon"></i>Delete</a>
                                                        </span>
                                                    </span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="form-check">
                                                        <input type="checkbox" class="form-check-input"
                                                            id="postTwentyFive" />
                                                        <label class="form-check-label" for="postTwentyFive"></label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <h5 class="mb-0">
                                                        <a href="#" class="text-inherit">Online WordPress
                                                            Courses Become ..
                                                        </a>
                                                    </h5>
                                                </td>
                                                <td>
                                                    <i class="fe fe-image fs-4 text-primary"></i>
                                                </td>
                                                <td>
                                                    <a href="#" class="text-inherit">Course</a>
                                                </td>
                                                <td>2 July, 2021 12:42pm</td>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <img src="../../assets/images/avatar/avatar-12.jpg"
                                                            alt="" class="rounded-circle avatar-xs me-2" />
                                                        <h5 class="mb-0">Zeban Juben</h5>
                                                    </div>
                                                </td>
                                                <td>
                                                    <span
                                                        class="badge-dot bg-danger me-1 d-inline-block align-middle"></span>Deleted
                                                </td>
                                                <td>
                                                    <span class="dropdown dropstart">
                                                        <a class="btn-icon btn btn-ghost btn-sm rounded-circle"
                                                            href="#" role="button" id="courseDropdown26"
                                                            data-bs-toggle="dropdown" data-bs-offset="-20,20"
                                                            aria-expanded="false">
                                                            <i class="fe fe-more-vertical"></i>
                                                        </a>
                                                        <span class="dropdown-menu" aria-labelledby="courseDropdown26">
                                                            <span class="dropdown-header">Settings</span>
                                                            <a class="dropdown-item" href="#"><i
                                                                    class="fe fe-edit dropdown-item-icon"></i>Edit</a>
                                                            <a class="dropdown-item" href="#"><i
                                                                    class="fe fe-move dropdown-item-icon"></i>Move</a>
                                                            <a class="dropdown-item" href="#"><i
                                                                    class="fe fe-copy dropdown-item-icon"></i>Copy</a>
                                                            <a class="dropdown-item" href="#"><i
                                                                    class="fe fe-toggle-left dropdown-item-icon"></i>Publish</a>
                                                            <a class="dropdown-item" href="#"><i
                                                                    class="fe fe-toggle-right dropdown-item-icon"></i>Unpublish</a>
                                                            <a class="dropdown-item" href="#"><i
                                                                    class="fe fe-trash dropdown-item-icon"></i>Delete</a>
                                                        </span>
                                                    </span>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Card Footer -->
                    <div class="card-footer">
                        <nav aria-label="Page navigation example">
                            <ul class="pagination justify-content-center mb-0">
                                <li class="page-item disabled">
                                    <a class="page-link mx-1 rounded" href="#" tabindex="-1"
                                        aria-disabled="true"><i class="mdi mdi-chevron-left"></i></a>
                                </li>
                                <li class="page-item active">
                                    <a class="page-link mx-1 rounded" href="#">1</a>
                                </li>
                                <li class="page-item">
                                    <a class="page-link mx-1 rounded" href="#">2</a>
                                </li>
                                <li class="page-item">
                                    <a class="page-link mx-1 rounded" href="#">3</a>
                                </li>
                                <li class="page-item">
                                    <a class="page-link mx-1 rounded" href="#"><i
                                            class="mdi mdi-chevron-right"></i></a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection