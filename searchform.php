<div class=" container pl-0 pr-0">
    <form role="search" method="get" action="<?php echo home_url('/'); ?>" class="mb-4 ">
        <div class="input-group sm-form flex-center">
            <input type="search"  class="form-control rounded" value="<?php echo get_search_query(); ?>" name="s" placeholder="O que procura?" required>
            <div class="input-group-append">
         <button class="btn btn-sm orange rounded" type="submit"><i class="fas fa-search fa-2x pl-2 pr-2 white-text" aria-hidden="true"></i></button>
            </div>
        </div>
    </form>
</div>