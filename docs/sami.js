
(function(root) {

    var bhIndex = null;
    var rootPath = '';
    var treeHtml = '        <ul>                <li data-name="namespace:" class="opened">                    <div style="padding-left:0px" class="hd">                        <span class="glyphicon glyphicon-play"></span><a href=".html">[Global Namespace]</a>                    </div>                    <div class="bd">                                <ul>                <li data-name="class:My_Upload" class="opened">                    <div style="padding-left:26px" class="hd leaf">                        <a href="My_Upload.html">My_Upload</a>                    </div>                </li>                            <li data-name="class:Welcome" class="opened">                    <div style="padding-left:26px" class="hd leaf">                        <a href="Welcome.html">Welcome</a>                    </div>                </li>                </ul></div>                </li>                            <li data-name="namespace:" class="opened">                    <div style="padding-left:0px" class="hd">                        <span class="glyphicon glyphicon-play"></span><a href=".html">App</a>                    </div>                    <div class="bd">                                <ul>                <li data-name="namespace:App_Models" class="opened">                    <div style="padding-left:18px" class="hd">                        <span class="glyphicon glyphicon-play"></span><a href="App/Models.html">Models</a>                    </div>                    <div class="bd">                                <ul>                <li data-name="class:App_Models_Permission" >                    <div style="padding-left:44px" class="hd leaf">                        <a href="App/Models/Permission.html">Permission</a>                    </div>                </li>                            <li data-name="class:App_Models_Site" >                    <div style="padding-left:44px" class="hd leaf">                        <a href="App/Models/Site.html">Site</a>                    </div>                </li>                </ul></div>                </li>                            <li data-name="namespace:App_Services" class="opened">                    <div style="padding-left:18px" class="hd">                        <span class="glyphicon glyphicon-play"></span><a href="App/Services.html">Services</a>                    </div>                    <div class="bd">                                <ul>                <li data-name="class:App_Services_Controller" >                    <div style="padding-left:44px" class="hd leaf">                        <a href="App/Services/Controller.html">Controller</a>                    </div>                </li>                            <li data-name="class:App_Services_Event" >                    <div style="padding-left:44px" class="hd leaf">                        <a href="App/Services/Event.html">Event</a>                    </div>                </li>                            <li data-name="class:App_Services_Laravel" >                    <div style="padding-left:44px" class="hd leaf">                        <a href="App/Services/Laravel.html">Laravel</a>                    </div>                </li>                            <li data-name="class:App_Services_Loader" >                    <div style="padding-left:44px" class="hd leaf">                        <a href="App/Services/Loader.html">Loader</a>                    </div>                </li>                            <li data-name="class:App_Services_Model" >                    <div style="padding-left:44px" class="hd leaf">                        <a href="App/Services/Model.html">Model</a>                    </div>                </li>                            <li data-name="class:App_Services_Pagination" >                    <div style="padding-left:44px" class="hd leaf">                        <a href="App/Services/Pagination.html">Pagination</a>                    </div>                </li>                            <li data-name="class:App_Services_Table" >                    <div style="padding-left:44px" class="hd leaf">                        <a href="App/Services/Table.html">Table</a>                    </div>                </li>                </ul></div>                </li>                            <li data-name="namespace:" class="opened">                    <div style="padding-left:18px" class="hd">                        <span class="glyphicon glyphicon-play"></span><a href=".html">Traits</a>                    </div>                    <div class="bd">                                <ul>                <li data-name="namespace:App_Traits_Site" >                    <div style="padding-left:36px" class="hd">                        <span class="glyphicon glyphicon-play"></span><a href="App/Traits/Site.html">Site</a>                    </div>                    <div class="bd">                                <ul>                <li data-name="class:App_Traits_Site_LinkUserGuide" >                    <div style="padding-left:62px" class="hd leaf">                        <a href="App/Traits/Site/LinkUserGuide.html">LinkUserGuide</a>                    </div>                </li>                            <li data-name="class:App_Traits_Site_ShowWelcome" >                    <div style="padding-left:62px" class="hd leaf">                        <a href="App/Traits/Site/ShowWelcome.html">ShowWelcome</a>                    </div>                </li>                </ul></div>                </li>                </ul></div>                </li>                </ul></div>                </li>                </ul>';

    var searchTypeClasses = {
        'Namespace': 'label-default',
        'Class': 'label-info',
        'Interface': 'label-primary',
        'Trait': 'label-success',
        'Method': 'label-danger',
        '_': 'label-warning'
    };

    var searchIndex = [
                    
            {"type": "Namespace", "link": ".html", "name": "", "doc": "Namespace "},{"type": "Namespace", "link": "App.html", "name": "App", "doc": "Namespace App"},{"type": "Namespace", "link": "App/Models.html", "name": "App\\Models", "doc": "Namespace App\\Models"},{"type": "Namespace", "link": "App/Services.html", "name": "App\\Services", "doc": "Namespace App\\Services"},{"type": "Namespace", "link": "App/Traits.html", "name": "App\\Traits", "doc": "Namespace App\\Traits"},{"type": "Namespace", "link": "App/Traits/Site.html", "name": "App\\Traits\\Site", "doc": "Namespace App\\Traits\\Site"},
            
            {"type": "Class", "fromName": "App\\Models", "fromLink": "App/Models.html", "link": "App/Models/Permission.html", "name": "App\\Models\\Permission", "doc": "&quot;&quot;"},
                                                        {"type": "Method", "fromName": "App\\Models\\Permission", "fromLink": "App/Models/Permission.html", "link": "App/Models/Permission.html#method_basic", "name": "App\\Models\\Permission::basic", "doc": "&quot;&quot;"},
            
            {"type": "Class", "fromName": "App\\Models", "fromLink": "App/Models.html", "link": "App/Models/Site.html", "name": "App\\Models\\Site", "doc": "&quot;&quot;"},
                    
            {"type": "Class", "fromName": "App\\Services", "fromLink": "App/Services.html", "link": "App/Services/Controller.html", "name": "App\\Services\\Controller", "doc": "&quot;&quot;"},
                                                        {"type": "Method", "fromName": "App\\Services\\Controller", "fromLink": "App/Services/Controller.html", "link": "App/Services/Controller.html#method__remap", "name": "App\\Services\\Controller::_remap", "doc": "&quot;&quot;"},
                    {"type": "Method", "fromName": "App\\Services\\Controller", "fromLink": "App/Services/Controller.html", "link": "App/Services/Controller.html#method___get", "name": "App\\Services\\Controller::__get", "doc": "&quot;&quot;"},
                    {"type": "Method", "fromName": "App\\Services\\Controller", "fromLink": "App/Services/Controller.html", "link": "App/Services/Controller.html#method_view", "name": "App\\Services\\Controller::view", "doc": "&quot;&quot;"},
            
            {"type": "Class", "fromName": "App\\Services", "fromLink": "App/Services.html", "link": "App/Services/Event.html", "name": "App\\Services\\Event", "doc": "&quot;&quot;"},
                                                        {"type": "Method", "fromName": "App\\Services\\Event", "fromLink": "App/Services/Event.html", "link": "App/Services/Event.html#method_error", "name": "App\\Services\\Event::error", "doc": "&quot;&quot;"},
                    {"type": "Method", "fromName": "App\\Services\\Event", "fromLink": "App/Services/Event.html", "link": "App/Services/Event.html#method_exception", "name": "App\\Services\\Event::exception", "doc": "&quot;&quot;"},
            
            {"type": "Class", "fromName": "App\\Services", "fromLink": "App/Services.html", "link": "App/Services/Laravel.html", "name": "App\\Services\\Laravel", "doc": "&quot;&quot;"},
                                                        {"type": "Method", "fromName": "App\\Services\\Laravel", "fromLink": "App/Services/Laravel.html", "link": "App/Services/Laravel.html#method___construct", "name": "App\\Services\\Laravel::__construct", "doc": "&quot;&quot;"},
                    {"type": "Method", "fromName": "App\\Services\\Laravel", "fromLink": "App/Services/Laravel.html", "link": "App/Services/Laravel.html#method_useEloquent", "name": "App\\Services\\Laravel::useEloquent", "doc": "&quot;&quot;"},
                    {"type": "Method", "fromName": "App\\Services\\Laravel", "fromLink": "App/Services/Laravel.html", "link": "App/Services/Laravel.html#method_useBlade", "name": "App\\Services\\Laravel::useBlade", "doc": "&quot;&quot;"},
                    {"type": "Method", "fromName": "App\\Services\\Laravel", "fromLink": "App/Services/Laravel.html", "link": "App/Services/Laravel.html#method_bootService", "name": "App\\Services\\Laravel::bootService", "doc": "&quot;&quot;"},
            
            {"type": "Class", "fromName": "App\\Services", "fromLink": "App/Services.html", "link": "App/Services/Loader.html", "name": "App\\Services\\Loader", "doc": "&quot;&quot;"},
                                                        {"type": "Method", "fromName": "App\\Services\\Loader", "fromLink": "App/Services/Loader.html", "link": "App/Services/Loader.html#method_assets", "name": "App\\Services\\Loader::assets", "doc": "&quot;&quot;"},
                    {"type": "Method", "fromName": "App\\Services\\Loader", "fromLink": "App/Services/Loader.html", "link": "App/Services/Loader.html#method_raw", "name": "App\\Services\\Loader::raw", "doc": "&quot;&quot;"},
                    {"type": "Method", "fromName": "App\\Services\\Loader", "fromLink": "App/Services/Loader.html", "link": "App/Services/Loader.html#method_scss", "name": "App\\Services\\Loader::scss", "doc": "&quot;&quot;"},
            
            {"type": "Class", "fromName": "App\\Services", "fromLink": "App/Services.html", "link": "App/Services/Model.html", "name": "App\\Services\\Model", "doc": "&quot;&quot;"},
                    
            {"type": "Class", "fromName": "App\\Services", "fromLink": "App/Services.html", "link": "App/Services/Pagination.html", "name": "App\\Services\\Pagination", "doc": "&quot;&quot;"},
                                                        {"type": "Method", "fromName": "App\\Services\\Pagination", "fromLink": "App/Services/Pagination.html", "link": "App/Services/Pagination.html#method_render", "name": "App\\Services\\Pagination::render", "doc": "&quot;&quot;"},
                    {"type": "Method", "fromName": "App\\Services\\Pagination", "fromLink": "App/Services/Pagination.html", "link": "App/Services/Pagination.html#method_getPreviousButton", "name": "App\\Services\\Pagination::getPreviousButton", "doc": "&quot;&quot;"},
                    {"type": "Method", "fromName": "App\\Services\\Pagination", "fromLink": "App/Services/Pagination.html", "link": "App/Services/Pagination.html#method_getNextButton", "name": "App\\Services\\Pagination::getNextButton", "doc": "&quot;&quot;"},
                    {"type": "Method", "fromName": "App\\Services\\Pagination", "fromLink": "App/Services/Pagination.html", "link": "App/Services/Pagination.html#method_getLinks", "name": "App\\Services\\Pagination::getLinks", "doc": "&quot;&quot;"},
            
            {"type": "Class", "fromName": "App\\Services", "fromLink": "App/Services.html", "link": "App/Services/Table.html", "name": "App\\Services\\Table", "doc": "&quot;&quot;"},
                                                        {"type": "Method", "fromName": "App\\Services\\Table", "fromLink": "App/Services/Table.html", "link": "App/Services/Table.html#method_scopeLike", "name": "App\\Services\\Table::scopeLike", "doc": "&quot;&quot;"},
                    {"type": "Method", "fromName": "App\\Services\\Table", "fromLink": "App/Services/Table.html", "link": "App/Services/Table.html#method_scopeLikeRaw", "name": "App\\Services\\Table::scopeLikeRaw", "doc": "&quot;&quot;"},
                    {"type": "Method", "fromName": "App\\Services\\Table", "fromLink": "App/Services/Table.html", "link": "App/Services/Table.html#method_scopeOrLike", "name": "App\\Services\\Table::scopeOrLike", "doc": "&quot;&quot;"},
                    {"type": "Method", "fromName": "App\\Services\\Table", "fromLink": "App/Services/Table.html", "link": "App/Services/Table.html#method_scopeOrLikeRaw", "name": "App\\Services\\Table::scopeOrLikeRaw", "doc": "&quot;&quot;"},
            
            {"type": "Trait", "fromName": "App\\Traits\\Site", "fromLink": "App/Traits/Site.html", "link": "App/Traits/Site/LinkUserGuide.html", "name": "App\\Traits\\Site\\LinkUserGuide", "doc": "&quot;&quot;"},
                                                        {"type": "Method", "fromName": "App\\Traits\\Site\\LinkUserGuide", "fromLink": "App/Traits/Site/LinkUserGuide.html", "link": "App/Traits/Site/LinkUserGuide.html#method_linkUserGuide", "name": "App\\Traits\\Site\\LinkUserGuide::linkUserGuide", "doc": "&quot;&quot;"},
            
            {"type": "Trait", "fromName": "App\\Traits\\Site", "fromLink": "App/Traits/Site.html", "link": "App/Traits/Site/ShowWelcome.html", "name": "App\\Traits\\Site\\ShowWelcome", "doc": "&quot;&quot;"},
                                                        {"type": "Method", "fromName": "App\\Traits\\Site\\ShowWelcome", "fromLink": "App/Traits/Site/ShowWelcome.html", "link": "App/Traits/Site/ShowWelcome.html#method_showWelcome", "name": "App\\Traits\\Site\\ShowWelcome::showWelcome", "doc": "&quot;&quot;"},
            
            {"type": "Class",  "link": "My_Upload.html", "name": "My_Upload", "doc": "&quot;&quot;"},
                    
            {"type": "Class",  "link": "Welcome.html", "name": "Welcome", "doc": "&quot;&quot;"},
                                                        {"type": "Method", "fromName": "Welcome", "fromLink": "Welcome.html", "link": "Welcome.html#method___construct", "name": "Welcome::__construct", "doc": "&quot;&quot;"},
                    {"type": "Method", "fromName": "Welcome", "fromLink": "Welcome.html", "link": "Welcome.html#method_index", "name": "Welcome::index", "doc": "&quot;&quot;"},
                    {"type": "Method", "fromName": "Welcome", "fromLink": "Welcome.html", "link": "Welcome.html#method_guide", "name": "Welcome::guide", "doc": "&quot;&quot;"},
            
            
                                        // Fix trailing commas in the index
        {}
    ];

    /** Tokenizes strings by namespaces and functions */
    function tokenizer(term) {
        if (!term) {
            return [];
        }

        var tokens = [term];
        var meth = term.indexOf('::');

        // Split tokens into methods if "::" is found.
        if (meth > -1) {
            tokens.push(term.substr(meth + 2));
            term = term.substr(0, meth - 2);
        }

        // Split by namespace or fake namespace.
        if (term.indexOf('\\') > -1) {
            tokens = tokens.concat(term.split('\\'));
        } else if (term.indexOf('_') > 0) {
            tokens = tokens.concat(term.split('_'));
        }

        // Merge in splitting the string by case and return
        tokens = tokens.concat(term.match(/(([A-Z]?[^A-Z]*)|([a-z]?[^a-z]*))/g).slice(0,-1));

        return tokens;
    };

    root.Sami = {
        /**
         * Cleans the provided term. If no term is provided, then one is
         * grabbed from the query string "search" parameter.
         */
        cleanSearchTerm: function(term) {
            // Grab from the query string
            if (typeof term === 'undefined') {
                var name = 'search';
                var regex = new RegExp("[\\?&]" + name + "=([^&#]*)");
                var results = regex.exec(location.search);
                if (results === null) {
                    return null;
                }
                term = decodeURIComponent(results[1].replace(/\+/g, " "));
            }

            return term.replace(/<(?:.|\n)*?>/gm, '');
        },

        /** Searches through the index for a given term */
        search: function(term) {
            // Create a new search index if needed
            if (!bhIndex) {
                bhIndex = new Bloodhound({
                    limit: 500,
                    local: searchIndex,
                    datumTokenizer: function (d) {
                        return tokenizer(d.name);
                    },
                    queryTokenizer: Bloodhound.tokenizers.whitespace
                });
                bhIndex.initialize();
            }

            results = [];
            bhIndex.get(term, function(matches) {
                results = matches;
            });

            if (!rootPath) {
                return results;
            }

            // Fix the element links based on the current page depth.
            return $.map(results, function(ele) {
                if (ele.link.indexOf('..') > -1) {
                    return ele;
                }
                ele.link = rootPath + ele.link;
                if (ele.fromLink) {
                    ele.fromLink = rootPath + ele.fromLink;
                }
                return ele;
            });
        },

        /** Get a search class for a specific type */
        getSearchClass: function(type) {
            return searchTypeClasses[type] || searchTypeClasses['_'];
        },

        /** Add the left-nav tree to the site */
        injectApiTree: function(ele) {
            ele.html(treeHtml);
        }
    };

    $(function() {
        // Modify the HTML to work correctly based on the current depth
        rootPath = $('body').attr('data-root-path');
        treeHtml = treeHtml.replace(/href="/g, 'href="' + rootPath);
        Sami.injectApiTree($('#api-tree'));
    });

    return root.Sami;
})(window);

$(function() {

    // Enable the version switcher
    $('#version-switcher').change(function() {
        window.location = $(this).val()
    });

    
        // Toggle left-nav divs on click
        $('#api-tree .hd span').click(function() {
            $(this).parent().parent().toggleClass('opened');
        });

        // Expand the parent namespaces of the current page.
        var expected = $('body').attr('data-name');

        if (expected) {
            // Open the currently selected node and its parents.
            var container = $('#api-tree');
            var node = $('#api-tree li[data-name="' + expected + '"]');
            // Node might not be found when simulating namespaces
            if (node.length > 0) {
                node.addClass('active').addClass('opened');
                node.parents('li').addClass('opened');
                var scrollPos = node.offset().top - container.offset().top + container.scrollTop();
                // Position the item nearer to the top of the screen.
                scrollPos -= 200;
                container.scrollTop(scrollPos);
            }
        }

    
    
        var form = $('#search-form .typeahead');
        form.typeahead({
            hint: true,
            highlight: true,
            minLength: 1
        }, {
            name: 'search',
            displayKey: 'name',
            source: function (q, cb) {
                cb(Sami.search(q));
            }
        });

        // The selection is direct-linked when the user selects a suggestion.
        form.on('typeahead:selected', function(e, suggestion) {
            window.location = suggestion.link;
        });

        // The form is submitted when the user hits enter.
        form.keypress(function (e) {
            if (e.which == 13) {
                $('#search-form').submit();
                return true;
            }
        });

    
});


