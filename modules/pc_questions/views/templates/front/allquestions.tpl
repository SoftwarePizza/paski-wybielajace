{extends file='page.tpl'}


{block name='page_content'}
    <div id="pc_questions">
    {* <div class="section-title">
        <h2 class="h2 products-section-title">
            {l s='Pytania i odpowiedzi' d='Shop.Theme.custom'}
        </h2>
        <p>{l s='Jak możemy pomóc?' d='Shop.Theme.custom'}</p>
    </div> *}   
    <div class="content">
        {foreach from=$questions item=question name=q}
            <div class="collapse-item">
                <div class="collaps-header">
                    <a class="question" data-toggle="collapse" href="#question_{$smarty.foreach.q.index}"
                        aria-expanded="false" aria-controls="question_{$smarty.foreach.q.index}">
                        <span class="icon">
                            <svg width="20" height="12" viewBox="0 0 20 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M1.19249e-07 2L10 12L20 2L18.225 0.225L10 8.45L1.775 0.225L1.19249e-07 2Z" fill="#1D4385" />
                            </svg>
                        </span>
                        <span class="text">{$question.question}</span>
                    </a>
                </div>
                <div class="collapse" id="question_{$smarty.foreach.q.index}">
                    <div class="card card-body">
                        {$question.answer}
                    </div>
                </div>
            </div>
        {/foreach}

    </div>
</div>
{/block}
